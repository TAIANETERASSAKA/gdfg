<?php
    require_once('geral.php');
?>


    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminateDisabled" disabled>
        <label class="form-check-label" for="flexCheckIndeterminateDisabled">
            Disabled indeterminate checkbox
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
        <label class="form-check-label" for="flexCheckDisabled">
            Disabled checkbox
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked >
        <label class="form-check-label" for="flexCheckCheckedDisabled">
            Disabled checked checkbox
        </label>
</div>

<script>
    

    let divFormCheck = document.createElement('div');
    divFormCheck.setAttribute("class", "form-check");

    let inputFormCheck = document.createElement('input');
    inputFormCheck.setAttribute("class", "form-check-input");
    inputFormCheck.setAttribute("type", "checkbox");

    let labelFormCheck = document.createElement('label');
    labelFormCheck.setAttribute("class", "form-check-label");








</script>

