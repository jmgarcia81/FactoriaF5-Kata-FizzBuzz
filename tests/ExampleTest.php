<?php

namespace Tests;

use  PHPUnit\Framework\TestCase;
use App\FizzBuzz;

class testFizzBuzz extends TestCase {

	public function test_Fizz_when_num_divisble_by_3(
	) {
		//stage
		$fizzBuzz = new FizzBuzz();

		//action
		$comprove = $fizzBuzz->multiply_by(3);

		//assert
		$this->assertEquals("Fizz", $comprove);
	}

	public function test_Buzz_when_num_divisble_by_5(
		) {
			//stage
			$fizzBuzz = new FizzBuzz();
	
			//action
			$comprove = $fizzBuzz->multiply_by(5);
	
			//assert
			$this->assertEquals("Buzz", $comprove);
		}

	public function test_FizzBuzz_when_num_divisble_by_3_or_5(
		) {
			//stage
			$fizzBuzz = new FizzBuzz();
	
			//action
			$comprove = $fizzBuzz->multiply_by(15);
	
			//assert
			$this->assertEquals("FizzBuzz", $comprove);
		}

		public function test_same_number_when_num_not_divisble_by_3_or_5(
			) {
				//stage
				$fizzBuzz = new FizzBuzz();
		
				//action
				$comprove = $fizzBuzz->multiply_by(19);
		
				//assert
				$this->assertEquals(19, $comprove);
			}
}


