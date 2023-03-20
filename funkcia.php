<?php
namespace main;
class menu{
private $filePath = "source/HeaderMenu.csv";
    public function getMenu (string $type): array
    {
        $menu = [];
        $isValid = $this->validateMenuType($type);
        if ($isValid) {
            if ($type === "header") {
                try {
                    $file = fopen($this->filePath, 'r');
                    $menu = [];

                    while (($data = fgetcsv($file)) !== false) {
                        $menu[$data[0]] = [
                            'path' => $data[11],
                            'name' => $data[2]
                        ];
                    }
                    fclose($file);
                } catch (\Exception $exception) {
                    $menu = [
                        'home' => [
                            'path' => 'index.php',
                            'name' => 'Domov',
                        ]
                    ];
                }
            }
        }
        return $menu;
    }

public function printMenu(array $menu)
{
    foreach ($menu as $key => $menuItem) echo '<li><a href="'.$menuItem['path'].'">'.$menuItem['name'].'</a><li>';
}

