<?php

class ResponseEditor
{
    public static function decode(string $data): array
    {
        $decodedData = json_decode($data, true);

        return $decodedData;
    }

    public static function makeList(string $data): void
    {
        echo "Lista stacji: \n";
        $i = 1;
        $data = self::decode($data);
        foreach($data as $row){
            echo "Stacja $i: " . $row['description'] . "\n";
            $i++;
        }
        return;
    }
}