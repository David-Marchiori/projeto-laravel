<?php

namespace App\Services;

use App\Models\Region;
use App\Models\WeightRange;

class QuoteService
{

    public function findRegionByZipCode($zipCode)
    {
        $region = Region::where('zipcode_start', '<=', $zipCode)
            ->where('zipcode_end', '>=', $zipCode)
            ->first();

        return $region;
    }

    public function calculateCubicWeight($length, $width, $height)
    {
        return ($length * $width * $height) / 6000;
    }

    public function findWeightRange($regionId, $weight)
    {
        $weightRange = WeightRange::where('region_id', $regionId)
            ->where('weight_start', '<=', $weight)
            ->where('weight_end', '>=', $weight)
            ->first();

        return $weightRange;
    }

    public function calculate($data)
    {
        $region = $this->findRegionByZipCode($data['zip_code']);
        if (!$region) {
            throw new \Exception('Região não encontrada para o CEP informado.');
        }

        $cubicWeight = $this->calculateCubicWeight($data['length'], $data['width'], $data['height']);
        $finalWeight = max($data['weight'], $cubicWeight);
        $weightRange = $this->findWeightRange($region->id, $finalWeight);

        if (!$weightRange) {
            throw new \Exception('Faixa de peso não encontrada para a região e peso calculados.');
        }

        $finalPrice = $weightRange->base_price + (($finalWeight / 1000) * $weightRange->price_per_kg);

        return [
            'region' => $region->name,
            'delivery_days' => $region->delivery_days,
            'weight_used' => $finalWeight,
            'price' => $finalPrice,
        ];
    }
}
