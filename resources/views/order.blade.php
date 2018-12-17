@extends('master')

@section('content')

    <h6><b>
            Please pick your dish type, meat/tofu selection, and toppings. If there are any special instructions, put them in the textbox and press confirm to send your order to us!</b>
    </h6>

    <br>
    <form method='GET'>
        <fieldset class='type'>
            <h5>Type</h5>
            <input type='radio'
                   name='type'
                   value='burrito'
            <?php if (!isset($type) or (isset($type) and $type == 'burrito')) echo 'checked' ?>> Burrito<br>
            <input type='radio'
                   name='type'
                   value='burrito bowl' <?php if (isset($type) and $type == 'burrito bowl') echo 'checked' ?>> Burrito Bowl<br>
            <input type='radio'
                   name='type'
                   value='hard taco' <?php if (isset($type) and $type == 'hard taco') echo 'checked' ?>> Hard Shell Taco<br>
            <input type='radio'
                   name='type'
                   value='soft taco' <?php if (isset($type) and $type == 'soft taco') echo 'checked' ?>> Soft Shell Taco<br>
            <input type='radio'
                   name='type'
                   value='salad' <?php if (isset($type) and $type == 'salad') echo 'checked' ?>> Salad<br>
        </fieldset>
        <br>

        <fieldset class='fill'>
            <h5>Meat & Tofu Selection</h5>
            <select name='fill' id='fill'>
                <option value='chicken'>Chicken ($7.95)</option>
                <option value='carnitas'>Carnitas ($7.95)</option>
                <option value='steak'>Steak ($7.95)</option>
                <option value='chorizo'>Chorizo ($7.95)</option>
                <option value='barbacoa'>Barbacoa ($7.95)</option>
                <option value='sofritas'>Sofritas/Tofu ($6.50)</option>
            </select>
        </fieldset>
        <br>

        <fieldset class='rice'>
            <h5>Fillings</h5>
            <h6>Rice</h6>
            <input type='radio'
                   name='rice'
                   value='White Rice'
            <?php if (!isset($rice) or (isset($rice) and $rice == 'White Rice')) echo 'checked' ?>> White Rice<br>
            <input type='radio'
                   name='rice'
                   value='Brown Rice' <?php if (isset($rice) and $rice == 'Brown Rice') echo 'checked' ?>> Brown Rice<br>
            <input type='radio'
                   name='rice'
                   value='None' <?php if (isset($rice) and $rice == 'None') echo 'checked' ?>> None<br>
        </fieldset>
        <br>

        <fieldset class='beans'>
            <h6>Bean</h6>
            <input type='radio'
                   name='beans'
                   value='Black Beans'
            <?php if (!isset($beans) or (isset($beans) and $beans == 'Black Beans')) echo 'checked' ?>> Black Beans<br>
            <input type='radio'
                   name='beans'
                   value='Pinto Beans' <?php if (isset($beans) and $beans == 'Pinto Beans') echo 'checked' ?>> Pinto Beans<br>
            <input type='radio'
                   name='beans'
                   value='None' <?php if (isset($beans) and $beans == 'None') echo 'checked' ?>> None<br>
        </fieldset>
        <br>

        <fieldset class='veggies'>
            <h6>Fajita Veggies</h6>
            <input type='radio'
                   name='veggies'
                   value='Yes'
            <?php if (!isset($veggies) or (isset($veggies) and $veggies == 'Yes')) echo 'checked' ?>> Yes<br>
            <input type='radio'
                   name='veggies'
                   value='No' <?php if (isset($veggies) and $veggies == 'No') echo 'checked' ?>> No<br>
        </fieldset>
        <br>

        <fieldset id="toppings">
            <h6>Toppings</h6>
            <input type='checkbox'
                   name='toppings[]'
                   value='queso'> Queso<br>
            <input type='checkbox'
                   name='toppings[]'
                   value='sourcream'> Sour Cream<br>
            <input type='checkbox'
                   name='toppings[]'
                   value='guac'> Guacamole<br>
            <input type='checkbox'
                   name='toppings[]'
                   value='mild'> Mild Red Salsa<br>
            <input type='checkbox'
                   name='toppings[]'
                   value='medium red salsa'> Med Red Salsa<br>
            <input type='checkbox'
                   name='toppings[]'
                   value='medium corn salsa'> Med Corn Salsa<br>
            <input type='checkbox'
                   name='toppings[]'
                   value='hot salsa'> Hot Salsa<br>
            <input type='checkbox'
                   name='toppings[]'
                   value='cheese'> Shredded Cheese<br>
        </fieldset>
        <br>

        <fieldset id="comment">
            <h5>Special Instructions</h5>
            <textarea name="comment" rows="2" cols="40"> </textarea>
        </fieldset>

        <br>

        <input type="submit" value="Place Order!">

    </form>

    <?php
    $type = $_GET['type'] ?? null;
    $fill = $_GET['fill'] ?? null;
    $beans = $_GET['beans'] ?? null;
    $rice = $_GET['rice'] ?? null;
    $veggies = $_GET['veggies'] ?? null;
    $toppings = $_GET['toppings'] ?? null;
    $comment = $_GET['comment'] ?? null;
    ?>

    <?php if ($_GET) : ?>
    <br>
    <div class='alert alert-info' role='alert'>
        <h5>Your order has been submitted!</h5>

        <h6>Order Details</h6>

        <table>
            <tr>
                <td>Type:</td>
                <td>{{ ucwords($type) }}</td>
            </tr>
            <tr>
                <td>Fill Selection:</td>
                <td>{{ ucwords($fill) }}</td>
            </tr>
            <tr>
                <td>Rice:</td>
                <td>{{ ucwords($rice) }}</td>
            </tr>
            <tr>
                <td>Beans:</td>
                <td>{{ ucwords($beans) }}</td>
            </tr>
            <tr>
                <td>Veggies:</td>
                <td>{{ ucwords($veggies) }}</td>
            </tr>
            <tr>
                <td>Topping:</td>
                <td> <?php if (!$toppings) {
                        echo "None";
                    } else {
                        echo ucwords(join(', ', $toppings));
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Add'l Comments:</td>
                <td>{{ ucwords($comment) }}</td>
            </tr>
            <tr>
                <td>Total (with tax):</td>
                <td>
                    <?php if ($fill == "sofritas") {
                        echo "$6.50";
                    } else {
                        echo "$7.95";
                    }
                    ?>
                </td>
            </tr>
        </table>

    <?php endif; ?>

    @include('modules.homebar')

@endsection
