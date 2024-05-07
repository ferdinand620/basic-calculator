<center style="padding-top: 20%;">
    <div class="container w-50 bg-black px-3 py-5" style="height: 500px;">
        <div class="display-area border border-light  fs-3 px-2 text-end  text-white " style="height:120px">
            <input type="text" wire:model="Expression" randomly class=" border-0 w-100 bg-black text-white text-end "><br>
            <p class="w-100 text-white ">{{$Result}}</p>
        </div>


        <div class="button pe-4 pt-5">
            <div class="d-flex gap-2 mt-2">
                <div class="col-3  btn btn-secondary " wire:click="clear">C</div>
                <div class="col-3  btn btn-secondary   " wire:click="clear">CE</div>
                <div class="col-3  btn btn-secondary  " wire:click="NumberInput('%')">%</div>
                <div class="col-3  btn  btn-warning text-white " wire:click="NumberInput('/')">/</div>
            </div>
            <div class="d-flex gap-2 mt-2">
                <div class="col-3  btn btn-secondary" wire:click='NumberInput(7)'>7</div>
                <div class="col-3  btn btn-secondary" wire:click='NumberInput(8)'>8</div>
                <div class="col-3  btn btn-secondary" wire:click='NumberInput(9)'>9</div>
                <div class="col-3  btn  btn-warning text-white" wire:click="NumberInput('*')">X</div>
            </div>
            <div class="d-flex gap-2 mt-2">
                <div class="col-3  btn btn-secondary" wire:click='NumberInput(4)'>4</div>
                <div class="col-3  btn btn-secondary" wire:click='NumberInput(5)'>5</div>
                <div class="col-3  btn btn-secondary" wire:click='NumberInput(6)'>6</div>
                <div class="col-3  btn  btn-warning text-white" wire:click="NumberInput('-')">-</div>
            </div>
            <div class="d-flex gap-2 mt-2">
                <div class="col-3  btn btn-secondary" wire:click='NumberInput(1)'>1</div>
                <div class="col-3  btn btn-secondary" wire:click='NumberInput(2)'>2</div>
                <div class="col-3  btn btn-secondary" wire:click='NumberInput(3)'>3</div>
                <div class="col-3  btn  btn-warning text-white" wire:click="NumberInput('+')">+</div>
            </div>
            <div class="d-flex gap-2 mt-2 ">
                <div class="col-3  btn btn-secondary" wire:click='NumberInput(00)'>00</div>
                <div class="col-3  btn btn-secondary" wire:click='NumberInput(0)'>0</div>
                <div class="col-3  btn btn-secondary" wire:click="NumberInput('.')">.</div>
                <div class="col-3  btn  btn-warning text-white" wire:click="calculate">=</div>
            </div>

        </div>


    </div>
    </div>
</center>