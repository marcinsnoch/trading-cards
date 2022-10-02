<?php

function trading_cards_custom_fields()
{
    add_meta_box(
        'trading_cards',
        __('Card details', 'tarding-cards'),
        'trading_cards_fields',
        'trading_cards',
        'normal',
        'high'
    );
}

function trading_cards_fields($post)
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'trading_cards_details';
    $card = $wpdb->get_row('SELECT * FROM ' . $table_name . ' WHERE card_id = ' . $post->ID); ?>
    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row"><label for="card_name">Card name</label></th>
                <td><input name="card_name" type="text" id="card_name" value="<?php echo $card->title ?? ''; ?>" class="regular-text"></td>
            </tr>
            <tr>
                <th scope="row"><label for="card_price">Card price</label></th>
                <td><input name="card_price" type="number" id="card_price" value="<?php echo $card->price ?? ''; ?>" class="regular-text"></td>
            </tr>
            <tr>
                <th scope="row">Checkbox</th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span>checkbox</span>
                        </legend>
                        <label for="checkbox_id">
                            <input name="checkbox_id" type="checkbox" id="checkbox_id" value="1">
                            Just check me!
                        </label>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <th scope="row"><label for="select_id">Select</label></th>
                <td>
                    <select name="select_id" id="select_id">
                        <option selected="selected" value="option_one">Option #1</option>
                        <option value="option_2">Option #2</option>
                        <option value="option_3">Option #3</option>
                        <option value="option_4">Option #4</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th scope="row">Paragraph</th>
                <td>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable
                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                        that it has a more-or-less normal distribution of letters, as opposed to using
                        'Content here, content here', making it look like readable English.
                    </p>
                </td>
            </tr>

            <tr>
                <th scope="row">Description</th>
                <td>
                    <p class="description">
                        It is a long established fact that a reader will be distracted by the readable
                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                        that it has a more-or-less normal distribution of letters, as opposed to using
                        'Content here, content here', making it look like readable English.
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
    <?php
}

function save_trading_cards_custom_field($post_id)
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'trading_cards_details';

    $data = [
        'title' => $_POST['card_name'] ?? null,
        'price' => $_POST['card_price'] ?? null,
    ];

    $result = $wpdb->update($table_name, $data, ['card_id' => get_the_ID()]);

    //If nothing found to update, it will try and create the record.
    if ($result === false || $result < 1) {
        $data = array_merge($data, ['card_id' => $post_id]);
        $wpdb->insert($table_name, $data);
    }
}
