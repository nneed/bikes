<template>


    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="py-2 text-center">
                            <h2>Filter</h2>
                            <p class="lead">Some text</p>
                        </div>

                        <div class="row">
                            <!--<div class="col-md-4 order-md-2 mb-4">-->
                                <!--<h4 class="d-flex justify-content-between align-items-center mb-3">-->
                                    <!--<span class="text-muted">Your cart</span>-->
                                    <!--<span class="badge badge-secondary badge-pill">3</span>-->
                                <!--</h4>-->
                                <!--<ul class="list-group mb-3">-->
                                    <!--<li class="list-group-item d-flex justify-content-between lh-condensed">-->
                                        <!--<div>-->
                                            <!--<h6 class="my-0">Product name</h6>-->
                                            <!--<small class="text-muted">Brief description</small>-->
                                        <!--</div>-->
                                        <!--<span class="text-muted">$12</span>-->
                                    <!--</li>-->
                                    <!--<li class="list-group-item d-flex justify-content-between lh-condensed">-->
                                        <!--<div>-->
                                            <!--<h6 class="my-0">Second product</h6>-->
                                            <!--<small class="text-muted">Brief description</small>-->
                                        <!--</div>-->
                                        <!--<span class="text-muted">$8</span>-->
                                    <!--</li>-->
                                    <!--<li class="list-group-item d-flex justify-content-between lh-condensed">-->
                                        <!--<div>-->
                                            <!--<h6 class="my-0">Third item</h6>-->
                                            <!--<small class="text-muted">Brief description</small>-->
                                        <!--</div>-->
                                        <!--<span class="text-muted">$5</span>-->
                                    <!--</li>-->
                                    <!--<li class="list-group-item d-flex justify-content-between bg-light">-->
                                        <!--<div class="text-success">-->
                                            <!--<h6 class="my-0">Promo code</h6>-->
                                            <!--<small>EXAMPLECODE</small>-->
                                        <!--</div>-->
                                        <!--<span class="text-success">-$5</span>-->
                                    <!--</li>-->
                                    <!--<li class="list-group-item d-flex justify-content-between">-->
                                        <!--<span>Total (USD)</span>-->
                                        <!--<strong>$20</strong>-->
                                    <!--</li>-->
                                <!--</ul>-->

                                <!--<form class="card p-2">-->
                                    <!--<div class="input-group">-->
                                        <!--<input type="text" class="form-control" placeholder="Promo code">-->
                                        <!--<div class="input-group-append">-->
                                            <!--<button type="submit" class="btn btn-secondary">Redeem</button>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</form>-->
                            <!--</div>-->
                            <div class="col-md-12 order-md-1">
                                <h4 class="mb-3">some text</h4>
                                <form class="needs-validation" novalidate>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="Make">Make</label>
                                            <select name="Make" v-on:change="changeModel" id="Make" data-width="auto" multiple title="Choose one of the following...">
                                            </select>

                                            <!--<input type="text" class="forsm-control" id="firstName" placeholder="" value="" required>-->
                                            <!--<div class="invalid-feedback">-->
                                                <!--Valid first name is required.-->
                                            <!--</div>-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="Model">Model</label>
                                            <select name="Model" id="Model" v-on:change="changeYear" data-width="auto" multiple title="Choose one of the following...">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="StartYr">startYear</label>
                                            <select name="StartYr" id="StartYr"  data-width="auto" multiple title="Choose one of the following...">
                                            </select>

                                            <!--<input type="text" class="form-control" id="firstName" placeholder="" value="" required>-->
                                            <!--<div class="invalid-feedback">-->
                                                <!--Valid first name is required.-->
                                            <!--</div>-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="EndYr">endYear</label>
                                            <select name="EndYr" id="EndYr" data-width="auto" multiple title="Choose one of the following...">
                                            </select>
                                        </div>
                                    </div>
                                    <hr class="mb-4">
                                    <div class="col-md-3 mb-3">
                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue</button>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>





</template>

<script>
    export default {
        props : ['selected','make','model','start_year','end_year'],
        mounted() {
            let make = this.make;
            this.createSelect($("#Make"),make);

            let end_year = this.end_year;
            this.createSelect($("#EndYr"),end_year);

            this.resetYears();

            this.changeModel();
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
                }else{
                    selected = this.selected['Make'];
                }

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
            }
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
