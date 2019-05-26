<template>


        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="border p-2">
                    <div class="text-center">
                        <p class="lead">Bike Filter</p>
                    </div>

                    <form id ="form-filter" class="needs-validation">
                        <div class="mb-3 d-flex justify-content-between">
                            <label for="Make">Make</label>
                            <select name="Make" id="Make" data-width="80%" multiple title="Choose one of the following...">
                            </select>
                        </div>

                        <div class="mb-3 d-flex justify-content-between">
                            <label for="EngCylinders">Cylinders</label>
                            <select name="EngCylinders" id="EngCylinders" data-width="75%" multiple title="Choose one of the following...">
                            </select>
                        </div>

                        <div class="mb-3 d-flex justify-content-between">
                            <label for="EngGearQty">Gears</label>
                            <select name="EngGearQty" id="EngGearQty" data-width="75%" multiple title="Choose one of the following...">
                            </select>
                        </div>

                        <div class="mb-3 d-flex justify-content-between">
                            <label for="WheelDiaRear">WheelDiaRear</label>
                            <select name="WheelDiaRear" id="WheelDiaRear" data-width="60%" multiple title="Choose one of the following...">
                            </select>
                        </div>

                        <div class="mb-3 d-flex justify-content-between">
                            <label for="WheelDiaFrt">WheelDiaFrt</label>
                            <select name="WheelDiaFrt" id="WheelDiaFrt"  data-width="60%" multiple title="Choose one of the following...">
                            </select>
                        </div>

                        <div class="mb-3 d-flex justify-content-between">
                            <label for="WheelType">WheelType</label>
                            <select name="WheelType" id="WheelType"  data-width="60%" multiple title="Choose one of the following...">
                            </select>
                        </div>

                        <div class="mb-3 d-flex justify-content-between">
                            <label for="BikeABS">BikeABS</label>
                            <select name="BikeABS" id="BikeABS"  data-width="60%" multiple title="Choose one of the following...">
                            </select>
                        </div>

                        <div class="mb-3 d-flex justify-content-between">
                            <label for="BikeTC">BikeTC</label>
                            <select name="BikeTC" id="BikeTC"  data-width="60%" multiple title="Choose one of the following...">
                            </select>
                        </div>

                        <div class="mb-3 d-flex justify-content-between">
                            <div class="col-md-6 p-0">
                                <label for="StartYr">StartYear</label>
                                <input class="rounded" name="StartYr" value="" placeholder="Enter text" type="text" id ="StartYr">
                            </div>
                            <div class="col-md-6 p-0 ml-1">
                                <label for="EndYr">endYear</label>
                                <input class="rounded" name="EndYr" value="" placeholder="Enter text" type="text" id ="EndYr">
                            </div>
                        </div>

                        <hr class="mb-4">

                        <div class="mb-3">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="border p-2">
                    <div class="text-center">
                        <p class="lead">My Details</p>
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
            console.log('dfsd');
            console.log(this.bikes);

            this.createSelect($("#Make"),this.make);
            this.createSelect($("#EngCylinders"),this.cylinders);
            this.createSelect($("#EngGearQty"),this.gears);
            this.createSelect($("#WheelDiaRear"),this.wheel_dia_rear);
            this.createSelect($("#WheelDiaFrt"),this.wheel_dia_frt);
            this.createSelect($("#WheelType"),this.wheel_type);
            this.createSelect($("#BikeABS"),this.bike_abs);
            this.createSelect($("#BikeTC"),this.bike_tс);

        },
        methods: {
            changeSelect: function (func,el,event) {
                if (event) {
                    let selected = $(event.target).val();
                    let values = [];
                    for (let key in selected){
                        values[key] = func(selected[key]);
                    }
                    if(selected == false){
                        values = func([])
                        if(values === null){
                            return;
                        }
                    }
                    this.createSelect(el,values);
                }
            },

            changeModel: function () {
                let model = this.model;
                let resetModel = this.resetModels();
                let resetYears = this.resetYears();
                let selected = [];
                if(event){
                    selected = $(event.target).val();
                }
                // else{
                //     selected = this.selected['Make'];
                // }

                let values = [];

                for (let key in selected){
                    values[key] = model[selected[key]] ;
                }
                if(selected == false || selected == undefined){
                    resetModel;
                    resetYears;

                    return;
                }
                this.createSelect($("#Model"),values);
            },

            changeYear: function (event) {
                let start_year = this.start_year;
                let resetYears = this.resetYears();
                this.changeSelect(function(selected){
                    if(selected == false){
                        resetYears;
                        return null;
                    }
                    return start_year[selected];
                },$("#StartYr"),event);

                let end_year = this.end_year;
                this.changeSelect(function(selected){
                    if(selected == false){
                        resetYears;
                        return null;
                    }
                    return end_year[selected];
                },$("#EndYr"),event);
            },
            changeEndYear: function (event){
                let end_year = this.end_year;
                this.changeSelect(function(selected){
                    if(selected == false){
                       // resetYears;
                        return null;
                    }

                    return end_year[selected];
                },$("#endYearBake"),event);
            },

            createSelect: function (el,data) {
                el.find('option').remove();
                let elems = [];
                let selected_array = this.selected[el.attr('id')];
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
                for (let key in elems) {
                    el.append("<option>"+elems[key]+"</option>");
                }
                if(selected_array){
                    el.selectpicker('val', selected_array);
                }
                el.selectpicker('refresh');
            },

            resetSelects: function () {
                this.resetYears();
            },
            resetYears: function () {
                let cnt = 0;
                let allYears = [];
                let start_year = this.start_year;
                for (let key in start_year){
                    for (let key1 in start_year[key]){
                        allYears[cnt] = start_year[key][key1];
                        cnt++;
                    }
                }
                this.createSelect($("#StartYr"),allYears);
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
