<?php
/**
 * Created by PhpStorm.
 * User: lapiscine
 * Date: 05/05/2018
 * Time: 08:50
 */

namespace PortfolioBundle;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageUpload
{
//    private $targetDir;
//
//    public function __construct($targetDir)
//    {
//        $this->targetDir = $targetDir;
//    }
//
//    public function upload(UploadedFile $file)
//    {
//        $fileName = md5(uniqid()).'.'.$file->guessExtension();
//
//        $file->move($this->getTargetDir(), $fileName);
//
//        return $fileName;
//    }
//
//    public function getTargetDir()
//    {
//        return $this->targetDir;
//    }

    private $targetDirectory;

    public function __construct($targetDirectory)
    {
        $this->targetDirectory = $targetDirectory;
    }

    public function upload(UploadedFile $file)
    {
        $fileName = md5(uniqid()).'.'.$file->guessExtension();

        $file->move($this->getTargetDirectory(), $fileName);

        return $fileName;
    }

    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }
}