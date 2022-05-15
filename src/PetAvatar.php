<?php

namespace Nefydev\PetAvatar;

use Exception;
use Nefydev\PetAvatar\Utilities\RandomColor;

class PetAvatar
{
    protected $config;

    public function __construct()
    {
        $this->config = $this->validateConfig(config('pet-avatar'));
    }

    public function generate()
    {
        $pet = $this->config['pet'];

        $parts = [];
        foreach (array_keys(config("{$pet}.parts")) as $part) {
            $pos = array_rand(config("{$pet}.parts.{$part}.variations"));
            $parts[$part] = config("{$pet}.parts.{$part}.variations.{$pos}");
        }

        $image = imagecreate(320, 320);
        $background = RandomColor::one(array('format' => 'rgb'));
        imagefilltoborder($image, 0, 0, imagecolorallocate($image, $background['r'], $background['g'], $background['b']), imagecolorallocate($image, $background['r'], $background['g'], $background['b']));

        $unit1 = 20;
        $unit2 = 10;

        foreach ($parts as $name => $part) {
            $color = RandomColor::one(config("{$pet}.parts.{$name}.colors"));
            foreach ($part as $col) {
                $unit = in_array($name, config("{$pet}.small_parts")) ? $unit2 : $unit1;
                $x1 = $col[0] * $unit1;
                $x2 = $x1 + ($col[1] * $unit);
                $y1 = $col[2] * $unit1;
                $y2 = $y1 + ($col[3] *  $unit);
                imagefilledrectangle($image, $x1, $y1, $x2, $y2, imagecolorallocate($image, $color['r'], $color['g'], $color['b']));
            }
        }

        $name = uniqid() . '.' . $this->config['file'];
        $path = $this->config['path'] . '/' . $name;

        $this->config['function']($image, $path);
        imagedestroy($image);

        return $name;
    }

    public function validateConfig(array $config)
    {
        $config['pet'] = in_array($config['pet'], ['cat', 'dog']) ? $config['pet'] : 'cat';
        $config['file'] = in_array($config['file'], ['jpeg', 'png', 'gif']) ? $config['file'] : 'png';
        $config['path'] = $config['path'] == '' ? public_path('avatars') : public_path($config['path']);
        $config['function'] = "image{$config['file']}";

        if (!is_dir($config['path']) && !mkdir($config['path'], 0777, true)) {
            throw new Exception(
                "PetAvatar - Export folder could not be instantiated ({$config['path']})"
            );
        }

        return $config;
    }
}
