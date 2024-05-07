<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public  $Expression;
    public $Result;
    public function NumberInput($numb)
    {
        $this->Expression .= $numb;
    }
    public function calculate()
    {
        $this->Result = $this->evaluateExpression($this->Expression);
    }
    public function clear()
    {
        $this->Expression = '';
        $this->Result = null;
    }

    private function evaluateExpression($Expression)
    {
        try {
            $Result = 0;
            $operator = "+";
            $numb = "";
            $decimal = false;
            for ($i = 0; $i < strlen($Expression); $i++) {
                $char = $Expression[$i];
                if (is_numeric($char) || ($char == '.' && !$decimal)) {
                    $numb .= $char;
                    if ($char == '.') {
                        $decimal = true;
                    }
                } else {
                    $Result = $this->performOperation($Result, $numb, $operator);
                    $operator = $char;
                    $numb = '';
                    $decimal = false;
                }
            }
            $Result = $this->performOperation($Result, $numb, $operator);
            return $Result;
        } catch (\Throwable $e) {
            return 'Invalid Expression';
        }
    }
    private function performOperation($Result, $numb, $operator)
    {
        switch ($operator) {
            case '+':
                $Result += $numb;
                break;
            case '-':
                $Result -= $numb;
                break;
            case '/':
                $Result /= $numb;
                break;
            case '*':
                $Result *= $numb;
                break;
            case '%': // Modulus operation
                $Result %= $numb;
                break;
        }

        return $Result;
    }
    public function render()
    {
        return view('livewire.calculator');
    }
}
