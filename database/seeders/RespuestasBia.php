<?php

namespace Database\Seeders;

use App\Models\ParameterScore;
use App\Models\ProductScore;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RespuestasBia extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cal_1_1 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 1,
                'product_id' => 1,
                'total_score' => 15
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_1_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_1_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_1_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_1_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_1_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_1_2 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 1,
                'product_id' => 5,
                'total_score' => 15
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_1_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_1_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_1_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_1_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_1_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_1_3 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 1,
                'product_id' => 4,
                'total_score' => 15
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_1_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_1_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_1_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_1_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_1_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_1_4 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 1,
                'product_id' => 3,
                'total_score' => 15
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_1_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_1_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_1_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_1_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_1_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_1_5 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 1,
                'product_id' => 9,
                'total_score' => 5
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_1_5->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_1_5->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_1_5->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_1_5->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_1_5->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_1_6 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 1,
                'product_id' => 6,
                'total_score' => 10
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_1_6->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_1_6->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_1_6->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_1_6->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_1_6->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_1_7 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 1,
                'product_id' => 8,
                'total_score' => 5
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_1_7->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_1_7->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_1_7->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_1_7->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_1_7->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_1_8 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 1,
                'product_id' => 7,
                'total_score' => 11
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_1_8->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_1_8->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_1_8->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_1_8->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_1_8->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_1_9 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 1,
                'product_id' => 2,
                'total_score' => 5
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_1_9->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_1_9->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_1_9->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_1_9->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_1_9->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_1_10 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 1,
                'product_id' => 12,
                'total_score' => 13
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_1_10->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_1_10->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_1_10->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_1_10->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_1_10->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_1_11 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 1,
                'product_id' => 10,
                'total_score' => 13
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_1_11->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_1_11->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_1_11->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_1_11->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_1_11->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_1_12 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 1,
                'product_id' => 11,
                'total_score' => 15
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_1_12->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_1_12->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_1_12->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_1_12->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_1_12->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_1_13 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 1,
                'product_id' => 13,
                'total_score' => 6
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_1_13->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_1_13->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_1_13->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_1_13->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_1_13->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_1_14 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 1,
                'product_id' => 14,
                'total_score' => 5
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_1_14->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_1_14->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_1_14->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_1_14->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_1_14->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_1_15 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 1,
                'product_id' => 15,
                'total_score' => 5
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_1_15->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_1_15->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_1_15->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_1_15->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_1_15->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        //Persona 2
        $cal_2_1 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 2,
                'product_id' => 1,
                'total_score' => 9
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_2_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_2_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_2_1->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_2_1->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_2_1->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_2_2 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 2,
                'product_id' => 5,
                'total_score' => 9
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_2_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_2_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_2_2->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_2_2->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_2_2->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_2_3 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 2,
                'product_id' => 4,
                'total_score' => 9
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_2_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_2_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_2_3->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_2_3->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_2_3->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_2_4 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 2,
                'product_id' => 3,
                'total_score' => 9
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_2_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_2_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_2_4->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_2_4->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_2_4->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_2_5 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 2,
                'product_id' => 9,
                'total_score' => 5
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_2_5->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_2_5->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_2_5->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_2_5->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_2_5->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_2_6 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 2,
                'product_id' => 6,
                'total_score' => 9
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_2_6->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_2_6->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_2_6->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_2_6->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_2_6->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_2_7 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 2,
                'product_id' => 8,
                'total_score' => 6
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_2_7->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_2_7->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_2_7->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_2_7->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_2_7->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_2_8 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 2,
                'product_id' => 7,
                'total_score' => 9
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_2_8->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_2_8->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_2_8->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_2_8->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_2_8->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_2_9 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 2,
                'product_id' => 2,
                'total_score' => 13
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_2_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_2_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_2_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_2_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_2_9->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_2_10 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 2,
                'product_id' => 12,
                'total_score' => 9
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_2_10->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_2_10->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_2_10->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_2_10->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_2_10->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_2_11 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 2,
                'product_id' => 10,
                'total_score' => 11
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_2_11->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_2_11->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_2_11->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_2_11->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_2_11->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_2_12 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 2,
                'product_id' => 11,
                'total_score' => 9
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_2_12->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_2_12->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_2_12->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_2_12->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_2_12->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_2_13 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 2,
                'product_id' => 13,
                'total_score' => 9
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_2_13->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_2_13->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_2_13->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_2_13->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_2_13->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_2_14 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 2,
                'product_id' => 14,
                'total_score' => 9
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_2_14->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_2_14->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_2_14->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_2_14->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_2_14->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_2_15 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 2,
                'product_id' => 15,
                'total_score' => 9
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_2_15->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_2_15->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_2_15->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_2_15->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_2_15->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        //Persona 3
        $cal_3_1 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 3,
                'product_id' => 1,
                'total_score' => 15
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_3_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_3_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_3_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_3_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_3_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_3_2 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 3,
                'product_id' => 5,
                'total_score' => 14

            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_3_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_3_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_3_2->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_3_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_3_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_3_3 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 3,
                'product_id' => 4,
                'total_score' => 15
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_3_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_3_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_3_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_3_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_3_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_3_4 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 3,
                'product_id' => 3,
                'total_score' => 15
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_3_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_3_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_3_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_3_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_3_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_3_5 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 3,
                'product_id' => 9,
                'total_score' => 11
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_3_5->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_3_5->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_3_5->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_3_5->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_3_5->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_3_6 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 3,
                'product_id' => 6,
                'product_score' => 15
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_3_6->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_3_6->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_3_6->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_3_6->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_3_6->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_3_7 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 3,
                'product_id' => 8,
                'total_score' => 12
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_3_7->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_3_7->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_3_7->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_3_7->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_3_7->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_3_8 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 3,
                'product_id' => 7,
                'total_score' => 15
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_3_8->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_3_8->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_3_8->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_3_8->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_3_8->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_3_9 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 3,
                'product_id' => 2,
                'total_score' => 15
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_3_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_3_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_3_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_3_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_3_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_3_10 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 3,
                'product_id' => 12,
                'total_score' => 15
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_3_10->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_3_10->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_3_10->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_3_10->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_3_10->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_3_11 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 3,
                'product_id' => 10,
                'total_score' => 15
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_3_11->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_3_11->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_3_11->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_3_11->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_3_11->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_3_12 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 3,
                'product_id' => 11,
                'total_score' => 15
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_3_12->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_3_12->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_3_12->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_3_12->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_3_12->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_3_13 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 3,
                'product_id' => 13,
                'total_score' => 15
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_3_13->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_3_13->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_3_13->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_3_13->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_3_13->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_3_14 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 3,
                'product_id' => 14,
                'total_score' => 15
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_3_14->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_3_14->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_3_14->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_3_14->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_3_14->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_3_15 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 3,
                'product_id' => 15,
                'total_score' => 14
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_3_15->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_3_15->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_3_15->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_3_15->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_3_15->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        //Persona 4
        $cal_4_1 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 4,
                'product_id' => 1,
                'total_score' => 14
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_4_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_4_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_4_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_4_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_4_1->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_4_2 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 4,
                'product_id' => 5,
                'total_score' => 14
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_4_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_4_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_4_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_4_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_4_2->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_4_3 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 4,
                'product_id' => 4,
                'total_score' => 14
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_4_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_4_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_4_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_4_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_4_3->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_4_4 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 4,
                'product_id' => 3,
                'total_score' => 14
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_4_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_4_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_4_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_4_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_4_4->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_4_5 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 4,
                'product_id' => 9,
                'total_score' => 10
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_4_5->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_4_5->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_4_5->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_4_5->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_4_5->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        

        $cal_4_6 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 4,
                'product_id' => 6,
                'total_score' => 13
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_4_6->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_4_6->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_4_6->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_4_6->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_4_6->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_4_7 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 4,
                'product_id' => 8,
                'total_score' => 11
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_4_7->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_4_7->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_4_7->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_4_7->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_4_7->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_4_8 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 4,
                'product_id' => 7,
                'total_score' => 14
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_4_8->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_4_8->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_4_8->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_4_8->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_4_8->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_4_9 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 4,
                'product_id' => 2,
                'total_score' => 12
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_4_9->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_4_9->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_4_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_4_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_4_9->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_4_10 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 4,
                'product_id' => 12,
                'total_score' => 11
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_4_10->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_4_10->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_4_10->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_4_10->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_4_10->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_4_11 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 4,
                'product_id' => 10,
                'total_score' => 14
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_4_11->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_4_11->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_4_11->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_4_11->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_4_11->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_4_12 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 4,
                'product_id' => 11,
                'total_score' => 13
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_4_12->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_4_12->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_4_12->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_4_12->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_4_12->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_4_13 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 4,
                'product_id' => 13,
                'total_score' => 8
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_4_13->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_4_13->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_4_13->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_4_13->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_4_13->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_4_14 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 4,
                'product_id' => 14,
                'total_score' => 9
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_4_14->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_4_14->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_4_14->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_4_14->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_4_14->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_4_15 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 4,
                'product_id' => 15,
                'total_score' => 9
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_4_15->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_4_15->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_4_15->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_4_15->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_4_15->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        //Persona 5
        $cal_5_1 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 5,
                'product_id' => 1,
                'total_score' => 15
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_5_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_5_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_5_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_5_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_5_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_5_2 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 5,
                'product_id' => 5,
                'total_score' => 9
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_5_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_5_2->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_5_2->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_5_2->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_5_2->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_5_3 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 5,
                'product_id' => 4,
                'total_score' => 12
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_5_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_5_3->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_5_3->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_5_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_5_3->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_5_4 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 5,
                'product_id' => 3,
                'total_score' => 12
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_5_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_5_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_5_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_5_4->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_5_4->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_5_5 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 5,
                'product_id' => 9,
                'total_score' => 6
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_5_5->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_5_5->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_5_5->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_5_5->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_5_5->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_5_6 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 5,
                'product_id' => 6,
                'total_score' => 6
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_5_6->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_5_6->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_5_6->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_5_6->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_5_6->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_5_7 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 5,
                'product_id' => 8,
                'total_score' => 7
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_5_7->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_5_7->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_5_7->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_5_7->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_5_7->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);


        $cal_5_8 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 5,
                'product_id' => 7,
                'total_score' => 7
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_5_8->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_5_8->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_5_8->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_5_8->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_5_8->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_5_9 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 5,
                'product_id' => 2,
                'total_score' => 13
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_5_9->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_5_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_5_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_5_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_5_9->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_5_10 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 5,
                'product_id' => 12,
                'total_score' => 8
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_5_10->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_5_10->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_5_10->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_5_10->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_5_10->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_5_11 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 5,
                'product_id' => 10,
                'total_score' => 10
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_5_11->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_5_11->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_5_11->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_5_11->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_5_11->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_5_12 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 5,
                'product_id' => 11,
                'total_score' => 11
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_5_12->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_5_12->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_5_12->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_5_12->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_5_12->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_5_13 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 5,
                'product_id' => 13,
                'total_score' => 11
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_5_13->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_5_13->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_5_13->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_5_13->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_5_13->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_5_14 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 5,
                'product_id' => 14,
                'total_score' => 13
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_5_14->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_5_14->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_5_14->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_5_14->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_5_14->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);


        $cal_5_15 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 5,
                'product_id' => 15,
                'total_score' => 8
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_5_15->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_5_15->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_5_15->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_5_15->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_5_15->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        //Persona 6
        $cal_6_1 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 6,
                'product_id' => 1,
                'total_score' => 15
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_6_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_6_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_6_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_6_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_6_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_6_2 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 6,
                'product_id' => 5,
                'total_score' => 11
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_6_2->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_6_2->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_6_2->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_6_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_6_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_6_3 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 6,
                'product_id' => 4,
                'total_score' => 12
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_6_3->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_6_3->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_6_3->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_6_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_6_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_6_4 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 6,
                'product_id' => 3,
                'total_score' => 14
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_6_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_6_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_6_4->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_6_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_6_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_6_5 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 6,
                'product_id' => 9,
                'total_score' => 7
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_6_5->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_6_5->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_6_5->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_6_5->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_6_5->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_6_6 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 6,
                'product_id' => 6,
                'total_score' => 11
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_6_6->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_6_6->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_6_6->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_6_6->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_6_6->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_6_7 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 6,
                'product_id' => 8,
                'total_score' => 7
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_6_7->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_6_7->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_6_7->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_6_7->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_6_7->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_6_8 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 6,
                'product_id' => 7,
                'total_score' => 10
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_6_8->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_6_8->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_6_8->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_6_8->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_6_8->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_6_9 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 6,
                'product_id' => 2,
                'total_score' => 15
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_6_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_6_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_6_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_6_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_6_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);


        $cal_6_10 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 6,
                'product_id' => 12,
                'total_score' => 9
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_6_10->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_6_10->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_6_10->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_6_10->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_6_10->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_6_11 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 6,
                'product_id' => 10,
                'total_score' => 9
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_6_11->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_6_11->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_6_11->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_6_11->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_6_11->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_6_12 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 6,
                'product_id' => 11,
                'total_score' => 9
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_6_12->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_6_12->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_6_12->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_6_12->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_6_12->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_6_13 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 6,
                'product_id' => 13,
                'total_score' => 15
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_6_13->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_6_13->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_6_13->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_6_13->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_6_13->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_6_14 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 6,
                'product_id' => 14,
                'total_score' => 13
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_6_14->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_6_14->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_6_14->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_6_14->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_6_14->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_6_15 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 6,
                'product_id' => 15,
                'total_score' => 13
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_6_15->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_6_15->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_6_15->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_6_15->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_6_15->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        //Persona 7
        $cal_7_1 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 7,
                'product_id' => 1,
                'total_score' => 14
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_7_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_7_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_7_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_7_1->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_7_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_7_2 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 7,
                'product_id' => 5,
                'total_score' => 14
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_7_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_7_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_7_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_7_2->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_7_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_7_3 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 7,
                'product_id' => 4,
                'total_score' => 14
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_7_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_7_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_7_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_7_3->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_7_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_7_4 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 7,
                'product_id' => 3,
                'total_score' => 14
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_7_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_7_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_7_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_7_4->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_7_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_7_5 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 7,
                'product_id' => 9,
                'total_score' => 9
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_7_5->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_7_5->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_7_5->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_7_5->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_7_5->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_7_6 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 7,
                'product_id' => 6,
                'total_score' => 14
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_7_6->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_7_6->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_7_6->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_7_6->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_7_6->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_7_7 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 7,
                'product_id' => 8,
                'total_score' => 9
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_7_7->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_7_7->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_7_7->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_7_7->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_7_7->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_7_8 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 7,
                'product_id' => 7,
                'total_score' => 14
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_7_8->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_7_8->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_7_8->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_7_8->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_7_8->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_7_9 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 7,
                'product_id' => 2,
                'total_score' => 14
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_7_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_7_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_7_9->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_7_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_7_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_7_10 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 7,
                'product_id' => 12,
                'total_score' => 10
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_7_10->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_7_10->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_7_10->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_7_10->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_7_10->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_7_11 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 7,
                'product_id' => 10,
                'total_score' => 10
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_7_11->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_7_11->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_7_11->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_7_11->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_7_11->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_7_12 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 7,
                'product_id' => 11,
                'total_score' => 10
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_7_12->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_7_12->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_7_12->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_7_12->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_7_12->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_7_13 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 7,
                'product_id' => 13,
                'total_score' => 13
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_7_13->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_7_13->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_7_13->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_7_13->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_7_13->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_7_14 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 7,
                'product_id' => 14,
                'total_score' => 11
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_7_14->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_7_14->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_7_14->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_7_14->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_7_14->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_7_15 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 7,
                'product_id' => 15,
                'total_score' => 11
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_7_15->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_7_15->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_7_15->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_7_15->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_7_15->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        //Persona 8
        $cal_8_1 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 8,
                'product_id' => 1,
                'total_store' => 13
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_8_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_8_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_8_1->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_8_1->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_8_1->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_8_2 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 8,
                'product_id' => 5,
                'total_score' => 11
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_8_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_8_2->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_8_2->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_8_2->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_8_2->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_8_3 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 8,
                'product_id' => 4,
                'total_score' => 12
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_8_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_8_3->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_8_3->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_8_3->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_8_3->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_8_4 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 8,
                'product_id' => 3,
                'total_score' => 11
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_8_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_8_4->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_8_4->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_8_4->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_8_4->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_8_5 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 8,
                'product_id' => 9,
                'total_score' => 11
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_8_5->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_8_5->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_8_5->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_8_5->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_8_5->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_8_6 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 8,
                'product_id' => 6,
                'total_score' => 12
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_8_6->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_8_6->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_8_6->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_8_6->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_8_6->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_8_7 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 8,
                'product_id' => 8,
                'total_score' => 11
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_8_7->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_8_7->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_8_7->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_8_7->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_8_7->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_8_8 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 8,
                'product_id' => 7,
                'total_score' => 10
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_8_8->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_8_8->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_8_8->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_8_8->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_8_8->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_8_9 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 8,
                'product_id' => 2,
                'total_score' => 15
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_8_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_8_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_8_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_8_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_8_9->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_8_10 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 8,
                'product_id' => 12,
                'total_score' => 13
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_8_10->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_8_10->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_8_10->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_8_10->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_8_10->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_8_11 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 8,
                'product_id' => 10,
                'total_score' => 13
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_8_11->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_8_11->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_8_11->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_8_11->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_8_11->id,
                'score' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_8_12 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 8,
                'product_id' => 11,
                'total_score' => 13
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_8_12->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_8_12->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_8_12->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_8_12->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_8_12->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $cal_8_13 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 8,
                'product_id' => 13,
                'total_score' => 12
            ]
        );

        ParameterScore::insert([
            [
                'parameter_id' => 1,
                'product_score_id' => $cal_8_13->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 2,
                'product_score_id' => $cal_8_13->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 3,
                'product_score_id' => $cal_8_13->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 4,
                'product_score_id' => $cal_8_13->id,
                'score' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parameter_id' => 5,
                'product_score_id' => $cal_8_13->id,
                'score' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);


        $cal_8_14 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 8,
                'product_id' => 14
            ]
        );

        $cal_8_15 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 8,
                'product_id' => 15
            ]
        );

        //Persona 9
        $cal_9_1 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 9,
                'product_id' => 1
            ]
        );

        $cal_9_2 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 9,
                'product_id' => 5
            ]
        );

        $cal_9_3 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 9,
                'product_id' => 4
            ]
        );

        $cal_9_4 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 9,
                'product_id' => 3
            ]
        );

        $cal_9_5 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 9,
                'product_id' => 9
            ]
        );

        $cal_9_6 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 9,
                'product_id' => 6
            ]
        );

        $cal_9_7 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 9,
                'product_id' => 8
            ]
        );

        $cal_9_8 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 9,
                'product_id' => 7
            ]
        );

        $cal_9_9 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 9,
                'product_id' => 2
            ]
        );

        $cal_9_10 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 9,
                'product_id' => 12
            ]
        );

        $cal_9_11 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 9,
                'product_id' => 10
            ]
        );

        $cal_9_12 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 9,
                'product_id' => 11
            ]
        );

        $cal_9_13 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 9,
                'product_id' => 13
            ]
        );

        $cal_9_14 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 9,
                'product_id' => 14
            ]
        );

        $cal_9_15 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 9,
                'product_id' => 15
            ]
        );

        //Persona 10
        $cal_10_1 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 10,
                'product_id' => 1
            ]
        );

        $cal_10_2 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 10,
                'product_id' => 5
            ]
        );

        $cal_10_3 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 10,
                'product_id' => 4
            ]
        );

        $cal_10_4 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 10,
                'product_id' => 3
            ]
        );

        $cal_10_5 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 10,
                'product_id' => 9
            ]
        );

        $cal_10_6 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 10,
                'product_id' => 6
            ]
        );

        $cal_10_7 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 10,
                'product_id' => 8
            ]
        );

        $cal_10_8 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 10,
                'product_id' => 7
            ]
        );

        $cal_10_9 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 10,
                'product_id' => 2
            ]
        );

        $cal_10_10 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 10,
                'product_id' => 12
            ]
        );

        $cal_10_11 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 10,
                'product_id' => 10
            ]
        );

        $cal_10_12 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 10,
                'product_id' => 11
            ]
        );

        $cal_10_13 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 10,
                'product_id' => 13
            ]
        );

        $cal_10_14 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 10,
                'product_id' => 14
            ]
        );

        $cal_10_15 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 10,
                'product_id' => 15
            ]
        );


        //Persona 11
        $cal_11_1 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 11,
                'product_id' => 1
            ]
        );

        $cal_11_2 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 11,
                'product_id' => 5
            ]
        );

        $cal_11_3 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 11,
                'product_id' => 4
            ]
        );

        $cal_11_4 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 11,
                'product_id' => 3
            ]
        );

        $cal_11_5 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 11,
                'product_id' => 9
            ]
        );

        $cal_11_6 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 11,
                'product_id' => 6
            ]
        );

        $cal_11_7 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 11,
                'product_id' => 8
            ]
        );

        $cal_11_8 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 11,
                'product_id' => 7
            ]
        );

        $cal_11_9 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 11,
                'product_id' => 2
            ]
        );

        $cal_11_10 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 11,
                'product_id' => 12
            ]
        );

        $cal_11_11 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 11,
                'product_id' => 10
            ]
        );

        $cal_11_12 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 11,
                'product_id' => 11
            ]
        );

        $cal_11_13 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 11,
                'product_id' => 13
            ]
        );

        $cal_11_14 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 11,
                'product_id' => 14
            ]
        );

        $cal_11_15 = ProductScore::create(
            [
                'bia_id' => 1,
                'user_id' => 11,
                'product_id' => 15
            ]
        );
    }
}
