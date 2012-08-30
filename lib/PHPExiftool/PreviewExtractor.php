<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool;

class PreviewExtractor extends Exiftool
{
    private $exiftool;

    public function __construct(Exiftool $exiftool)
    {
        $this->exiftool = $exiftool;
    }

    public function extract($pathfile, $outputDir)
    {
        if ( ! file_exists($pathfile)) {
            throw new Exception\LogicException(sprintf('%s does not exists', $pathfile));
        }

        if ( ! is_dir($outputDir) || ! is_writable($outputDir)) {
            throw new Exception\LogicException(sprintf('%s is not writable', $outputDir));
        }

        $command = "-if " . escapeshellarg('$jpgfromraw') . " -b -jpgfromraw "
            . "-w " . escapeshellarg(realpath($outputDir)) . "/JpgFromRaw%c.jpg -execute "
            . "-if " . escapeshellarg('$previewimage') . " -b -previewimage "
            . "-w " . escapeshellarg(realpath($outputDir)) . "/PreviewImage%c.jpg "
            . "-common_args -q -m " . $pathfile;

        try {
            $this->exiftool->executeCommand($command);
        } catch (Exception\RuntimeException $e) {

        }

        return new \DirectoryIterator($outputDir);
    }
}
