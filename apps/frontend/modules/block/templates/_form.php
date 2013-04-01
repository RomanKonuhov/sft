<form>
    <input type="hidden" name="sf_method" value="put" />
    <table>
        <tfoot>
            <tr>
                <td colspan="2">
                    <input id="save" type="submit" value="Save" />
                </td>
            </tr>
        </tfoot>
        <tbody>
        <tr>
            <th><?php echo $form['parent_id']->renderLabel() ?></th>
            <td>
                <?php echo $form['parent_id']->renderError() ?>
                <?php echo $form['parent_id'] ?>
            </td>
        </tr>
        <tr>
            <th><?php echo $form['page_id']->renderLabel() ?></th>
            <td>
                <?php echo $form['page_id']->renderError() ?>
                <?php echo $form['page_id'] ?>
            </td>
        </tr>
        <tr>
            <th><?php echo $form['block_link_id']->renderLabel() ?></th>
            <td>
                <?php echo $form['block_link_id']->renderError() ?>
                <?php echo $form['block_link_id'] ?>
            </td>
        </tr>
        <tr>
            <th><?php echo $form['header']->renderLabel() ?></th>
            <td>
                <?php echo $form['header']->renderError() ?>
                <?php echo $form['header'] ?>
            </td>
        </tr>
        <tr>
            <th><?php echo $form['type']->renderLabel() ?></th>
            <td>
                <?php echo $form['type']->renderError() ?>
                <?php echo $form['type'] ?>
            </td>
        </tr>
        <tr>
            <th><?php echo $form['sort']->renderLabel() ?></th>
            <td>
                <?php echo $form['sort']->renderError() ?>
                <?php echo $form['sort'] ?>
            </td>
        </tr>
        <tr>
            <th><?php echo $form['sort_type']->renderLabel() ?></th>
            <td>
                <?php echo $form['sort_type']->renderError() ?>
                <?php echo $form['sort_type'] ?>
            </td>
        </tr>
        <tr>
            <th><?php echo $form['visible']->renderLabel() ?></th>
            <td>
                <?php echo $form['visible']->renderError() ?>
                <?php echo $form['visible'] ?>
            </td>
        </tr>
        <tr>
            <th><?php echo $form['css']->renderLabel() ?></th>
            <td>
                <?php echo $form['css']->renderError() ?>
                <?php echo $form['css'] ?>
            </td>
        </tr>
        <tr>
            <th><?php echo $form['by_default']->renderLabel() ?></th>
            <td>
                <?php echo $form['by_default']->renderError() ?>
                <?php echo $form['by_default'] ?>
            </td>
        </tr>
        <tr>
            <th><?php echo $form['azlist_show']->renderLabel() ?></th>
            <td>
                <?php echo $form['azlist_show']->renderError() ?>
                <?php echo $form['azlist_show'] ?>
            </td>
        </tr>
        <tr>
            <th><?php echo $form['item_per_page']->renderLabel() ?></th>
            <td>
                <?php echo $form['item_per_page']->renderError() ?>
                <?php echo $form['item_per_page'] ?>
            </td>
        </tr>
        <tr>
            <th><?php echo $form['s_order']->renderLabel() ?></th>
            <td>
                <?php echo $form['s_order']->renderError() ?>
                <?php echo $form['s_order'] ?>
            </td>
        </tr>
        </tbody>
    </table>
</form>