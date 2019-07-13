<template>

        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="border p-2">
                    <div class="text-center">
                        <p class="lead">Bike Filter</p>
                    </div>

                    <form id ="form-filter" class="needs-validation">
                        <div class="mb-3 Make_block">
                            <label>Make</label> <div class="all_inputs">more</div>
                        </div>

                        <div class="mb-3 EngCylinders_block">
                            <label>Cylinders</label> <div class="all_inputs">more</div>
                        </div>

                        <div class="mb-3 EngGearQty_block">
                            <label>Gears</label> <div class="all_inputs">more</div>
                        </div>

                        <div class="mb-3 WheelDiaRear_block">
                            <label>WheelDiaRear</label> <div class="all_inputs">more</div>
                        </div>

                        <div class="mb-3 WheelDiaFrt_block">
                            <label>WheelDiaFrt</label> <div class="all_inputs">more</div>
                        </div>

                        <div class="mb-3 WheelType_block">
                            <label>WheelType</label> <div class="all_inputs">more</div>
                        </div>

                        <div class="mb-3 BikeABS_block">
                            <label>BikeABS</label> <div class="all_inputs">more</div>
                        </div>

                        <div class="mb-3 BikeTC_block">
                            <label>BikeTC</label> <div class="all_inputs">more</div>
                        </div>

                        <div class="mb-3 d-flex justify-content-between">
                            <div class="col-md-6 p-0">
                                <label for="StartYr">StartYear</label>
                                <input class="rounded" name="StartYr" :value="this.selected['StartYr']"  placeholder="Enter text" type="text" id ="StartYr">
                            </div>
                            <div class="col-md-6 p-0 ml-1">
                                <label for="EndYr">endYear</label>
                                <input class="rounded" name="EndYr" :value="this.selected['EndYr']"   placeholder="Enter text" type="text" id ="EndYr">
                            </div>
                        </div>

                        <hr class="mb-4">

                        <!--<div class="mb-3">-->
                            <!--<button class="btn btn-primary btn-lg btn-block" type="submit">Continue</button>-->
                        <!--</div>-->
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="border p-2">
                    <div class="text-center">
                        <p class="lead">My Details</p>
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="col-md-3 p-0">
                                <label>Required Fuel Range</label>
                            </div>
                            <div class="col-md-9 p-0 ml-1">
                                <input class="rounded" name="fuel_range" type="radio" id ="">
                                <label>Stock</label>
                                <input class="rounded" name="fuel_range" type="radio" id ="">
                                <label>KM</label>
                                <input class="rounded calculate_input" name="calculate_fuel_range" placeholder="KG/lbs" type="text" id ="">
                                <input class="rounded" name="fuel_range" type="radio" id ="">
                                <label>L/Ga</label>
                                <input class="rounded calculate_input" name="fuel_range" placeholder="KG/lbs" type="text" id ="">
                            </div>
                        </div>
                        <div class="mb-3 d-flex">
                            <div class="col-md-3 p-0">
                                <label>Rider Weight</label>
                            </div>
                            <div class="col-md-5 p-0 ml-1">
                                <input class="rounded" name="rider_weight" type="text" placeholder="KG/lbs" id ="">
                            </div>
                        </div>
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="col-md-3 p-0">
                                <label>Rider Gear Weight</label>
                            </div>
                            <div class="col-md-9 p-0 ml-1">
                                <input class="" name="rider_gear_weight" type="radio" id ="">
                                <label>0 KG</label>
                                <input class="" name="rider_gear_weight" type="radio" id ="">
                                <label>L 5KG</label>
                                <input class="" name="rider_gear_weight" type="radio" id ="">
                                <label>M 10KG</label>
                                <input class="" name="rider_gear_weight" type="radio" id ="">
                                <label>H 15KG</label>
                                <input class="" name="rider_gear_weight" type="radio" id ="">
                                <label>Custom</label>
                                <input class="rounded calculate_input" name="rider_gear_weight" placeholder="KG/lbs" type="text" id ="">
                            </div>
                        </div>
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="col-md-3 p-0">
                                <label>Tank Bag</label>
                            </div>
                            <div class="col-md-9 p-0 ml-1">
                                <input class="" name="tank_bag" type="radio" id ="">
                                <label>0kg</label>
                                <input class="" name="tank_bag" type="radio" id ="">
                                <label>L 2KG</label>
                                <input class="" name="tank_bag" type="radio" id ="">
                                <label>M 5KG</label>
                                <input class="" name="tank_bag" type="radio" id ="">
                                <label>H 8KG</label>
                                <input class="rounded calculate_input" name="tank_bag" placeholder="KG/lbs" type="text" id ="">
                                <label>Custom</label>
                            </div>
                        </div>
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="col-md-3 p-0">
                                <label>Required Fuel Range</label>
                            </div>
                            <div class="col-md-9 p-0 ml-1">
                                <input class="rounded" name="fuel_range" type="radio" id ="">
                                <label>Stock</label>
                                <input class="rounded" name="fuel_range" type="radio" id ="">
                                <label>KM</label>
                                <input class="rounded calculate_input" name="calculate_fuel_range" placeholder="Enter text" type="text" id ="">
                                <input class="rounded" name="fuel_range" type="radio" id ="">
                                <label>L/Ga</label>
                                <input class="rounded calculate_input" name="fuel_range" placeholder="Enter text" type="text" id ="">
                            </div>
                        </div>
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="col-md-3 p-0">
                                <label>Tank Bag</label>
                            </div>
                            <div class="col-md-9 p-0 ml-1">
                                <input class="rounded" name="tank_bag" type="radio" id ="">
                                <label>0KG</label>
                                <input class="rounded" name="tank_bag" type="radio" id ="">
                                <label>L 2KG</label>
                                <input class="rounded calculate_input" name="tank_bag" placeholder="Enter text" type="text" id ="">
                                <label>M 5KG</label>
                                <input class="rounded" name="tank_bag" type="radio" id ="">
                                <label>H 8KG</label>
                                <input class="rounded calculate_input" name="tank_bag" placeholder="Enter text" type="radio" id ="">
                                <label>Custom</label>
                                <input class="rounded calculate_input" name="tank_bag" placeholder="Enter text" type="text" id ="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="border p-2">
                    <div class="text-center">
                        <p class="lead">{{ count }}<span> Results</span></p>
                    </div>
                    <button type="button" v-on:click="" class="btn btn-outline-info">Compare selected (max 3)</button>
                    <button type="button" v-on:click="" class="btn btn-outline-info">Table all</button>
                    <div class=" p-1 mt-1 container-fluid" v-for="item in bikes">
                        <div class="row">
                            <div class="col-md-1 pt-3"><input type="checkbox" :id="item.BikeID"></div>
                            <div class=" border col-md-10">
                                <div><span class="font-weight-bold">Make: </span>{{ item.Make }}</div>
                                <div><span class="font-weight-bold">Model: </span>{{ item.Model }}</div>
                                <div><span class="font-weight-bold">Start year: </span>{{ item.StartYr }}</div>
                                <div><span class="font-weight-bold">End year: </span>{{ item.EndYr }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

</template>

<script>

    export default {
        props : ['selected','make','cylinders','start_year','end_year','gears','wheel_dia_rear','wheel_dia_frt'
            ,'wheel_type','bike_abs','bike_tс','bikes','count'],
        mounted() {
            this.createSelect($(".Make_block"),this.make, 'Make');
            this.createSelect($(".EngCylinders_block"),this.cylinders,'EngCylinders');
            this.createSelect($(".EngGearQty_block"),this.gears,'EngGearQty');
            this.createSelect($(".WheelDiaRear_block"),this.wheel_dia_rear,'WheelDiaRear');
            this.createSelect($(".WheelDiaFrt_block"),this.wheel_dia_frt,'WheelDiaFrt');
            this.createSelect($(".WheelType_block"),this.wheel_type,'WheelType');
            this.createSelect($(".BikeABS_block"),this.bike_abs,'BikeABS');
            this.createSelect($(".BikeTC_block"),this.bike_tс,'BikeTC');
            $('input').on('change',function (e) {
                $(this).parents('form').submit();
            });
            $('.all_inputs').on('click',function (e) {
                if($(this).text() == 'more'){
                    $(this).text('less');
                    $(this).parent().find('.wrapper_input').slideDown();
                }else{
                    $(this).text('more');
                    $(this).parent().find('.wrapper_input').slideUp();
                }

            });

        },
        methods: {
            createSelect: function (el,data,name) {
                let elems = [];

                let selected_array = this.selected[name];
                console.log(selected_array);
                for (let key in data) {
                    if(Array.isArray(data[key])){
                        for (var key_elem in data[key]){
                            elems[data[key][key_elem]] = data[key][key_elem];
                        }
                    }else {
                        elems[data[key]] = data[key];
                    }
                }
                elems.sort(compareNumeric);
                let showAll = false;
                for (let key in elems) {
                    if(selected_array){
                        console.log(elems[key]);
                    }

                    let cheked = '';
                    if(selected_array && selected_array.indexOf(elems[key].toString()) >= 0){
                        cheked = 'checked';
                        showAll = true;
                    }
                    let check_box = "" +
                        "<div class='wrapper_input'>" +
                            "<input type='checkbox' id='" + elems[key] + "' name = '" + name + "' value='" + elems[key] + "' " + cheked + ">" +
                            "<label for='" + elems[key] + "'>" + elems[key] + "</label>"
                        "</div>";
                    if(!el.hasClass('checked')){
                        el.addClass(cheked);
                    }
                    el.append(check_box);


                }
                if(showAll){
                    el.find('.all_inputs').text('less');
                }
            },

            resetModels: function () {
                let cnt = 0;
                let allYears = [];
                let start_year = this.model;
                for (let key in start_year){
                    for (let key1 in start_year[key]){
                        allYears[cnt] = start_year[key][key1];
                        cnt++;
                    }
                }
                this.createSelect($("#Model"),start_year);
            },
        }
    }

    function compareNumeric(a, b) {
        if (a > b) return 1;
        if (a < b) return -1;
    }
    function getKeyByValue(object, value) {
        return Object.keys(object).find(key => object[key] === value);
    }


</script>
