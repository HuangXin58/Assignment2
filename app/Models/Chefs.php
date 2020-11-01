<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Chefs {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Dong Zhenxiang',
            'city' => 'Beijing',
            'gender' => 'male',
            'birthday' => '1961 december',
            'cookfield' => 'Shandong cuisine',
            'signaturedish' => 'Pecking Duck',
            'image' => '1.jpg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Shi Zhengliang',
            'city' => 'Chunyang',
            'gender' => 'male',
            'birthday' => '1946 december',
            'cookfield' => 'Sichuan cuisine',
            'signaturedish' => 'Fish roll with white sauce',
            'image' => '2.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Wang Yijun',
            'city' => 'Yantai',
            'gender' => 'male',
            'birthday' => '1933 december',
            'cookfield' => 'Shandong cuisine',
            'signaturedish' => 'Scallion sea cucumber',
            'image' => '3.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Lu Zhaoqi',
            'city' => 'Shanghai',
            'gender' => 'male',
            'birthday' => '1940 december',
            'cookfield' => 'Sichuan cuisine',
            'signaturedish' => 'Minced winter soup with shrimp and crab powder',
            'image' => '4.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Ju Changlong',
            'city' => 'Jiangsu',
            'gender' => 'male',
            'birthday' => '1937 december',
            'cookfield' => 'Cantonese, Sichuan and Shanghai cuisine',
            'signaturedish' => 'Lotus sliced chicken grain',
            'image' => '5.jpg',
        ],
        
        '6' => [
            'id' => 6,
            'name' => 'Kang Hui',
            'city' => 'Shunde',
            'gender' => 'male',
            'birthday' => '1927 december',
            'cookfield' => 'Guangdong Cuisine',
            'signaturedish' => 'Eight eal yellow chicken',
            'image' => '6.jpg',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
