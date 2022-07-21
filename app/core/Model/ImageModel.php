<?php

declare(strict_types = 1);

/**
 * 
 * 
 * @author Toni Zeidler
 */
#[Entity]
#[Table('images')]
class ImageModel  {

    /** @var int(11) id */
    #[Id]
    #[Column(type: Types::INTEGER, name: 'id'), GeneratedValue]
    private int $id;

    /** @var string(100) */
    #[Column(type: Types::VARCHAR, name: 'filename')]
    private string $filename;

    /** @var string(1000) */
    #[Column(type: Types::VARCHAR, name: 'title')]
    private string $title;

    /** @var string(10000) */
    #[Column(type: Types::TEXT, name: 'description')]
    private string $description;

    // public function __construct(int $id, string $fileName, string $imageTitle, string $imageDesc){
    //     $this->id = $id;
    //     $this->imageFileName = $fileName;
    //     $this->imageTitle = $imageTitle;
    //     $this->imageDescription = $imageDesc;
    // }

    public function getId(): int {
        return $this->id;
    }

    public function getFileName(): string {
        return $this->filename;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getDescription(): string | null{
        return $this->description;
    }

    

}