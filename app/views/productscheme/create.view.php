<div class="tempDiv" style="min-height: 90vh; margin: auto; padding: 75px 16px">
    <form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
        <fieldset>
            <legend><?= $text_legend ?></legend>

            <div class="input_wrapper_other n50 padding select">
                <label class="block"><b><?= $text_label_PSField ?></b></label>
                <select name="Field" id="Field">
                    <option value="0">No Fields Selected Yet</option>
                    <?php
                    if ($fields != false) {
                        foreach ($fields as $field) { ?>
                            <option value="<?= $field->FieldName; ?>"><?= $field->FieldName;?></option>
                        <?php   }
                    } ?>
                </select>
            </div>

            <div class="input_wrapper_other n50 padding select">
                <label class="block"><b><?= $text_label_PSCat ?></b></label>
                <select name="Category" id="Category">
                    <option value="0">No Categories Selected Yet</option>
                    <?php
                    if ($categories != false) {
                        foreach ($categories as $cat) { ?>
                            <option value="<?= $cat->CategoryName; ?>"><?= $cat->CategoryName;?></option>
                        <?php   }
                    } ?>
                </select>
            </div>

            <div class="input_wrapper_other n100 border padding">
                <label ><b><?= $text_label_PSName ?></b></label>
                <input required type="text" name="PSName" maxlength="40" value="<?= $this->showValue('Name') ?>">
            </div>


            <input class="no_float" type="submit" name="submit" value="<?= $text_label_save ?>">
        </fieldset>
    </form>
<?php var_dump($_POST); ?>

</div>




