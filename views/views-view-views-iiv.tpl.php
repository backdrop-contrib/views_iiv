<?php

/**
 * @file
 * Default view template to display content using views_iiv layout_type
 */
?>

<?php
$layout_type = $options['layout_type'];

switch ($layout_type) {
    case "one_two_container":
        print '<div class="views_iiv l-secondary row">';
            if (!empty($title)) {
                print "<h3>$title</h3>";
            }

            foreach ($rows as $id => $row) {
                if ($row_classes[$id] && $id === 0) {
                    print '<div class="col-xs-12 ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
                }
                elseif ($row_classes[$id]) {
                    print '<div class="col-md-6 ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
                }
            }
            print '</div>';
    break;

    case "one_three_container":
        print '<div class="views_iiv l-secondary row">';
        if (!empty($title)) {
            print "<h3>$title</h3>";
        }

        foreach ($rows as $id => $row) {
            if ($row_classes[$id] && $id === 0) {
                print '<div class="col-xs-12 ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
            }
            elseif ($row_classes[$id]) {
                print '<div class="col-md-4 ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
            }
        }
        print '</div>';
    break;

    case "two_three_container":
        print '<div class="views_iiv l-secondary row">';
        if (!empty($title)) {
            print "<h3>$title</h3>";
        }

        foreach ($rows as $id => $row) {
            if ($row_classes[$id] && ($id === 0) || $id === 1) {
                print '<div class="col-md-6 ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
            }
            elseif ($row_classes[$id]) {
                print '<div class="col-md-4 ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
            }
        }
        print '</div>';
    break;

    case "two_container":
        print '<div class="views_iiv l-secondary row">';
        if (!empty($title)) {
            print "<h3>$title</h3>";
        }

        foreach ($rows as $id => $row) {
            print '<div class="col-md-6 ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
        }
        print '</div>';
    break;

    case "three_container":
        print '<div class="views_iiv l-secondary row">';
        if (!empty($title)) {
            print "<h3>$title</h3>";
        }

        foreach ($rows as $id => $row) {
            print '<div class="col-md-4 col-sm-6 ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
        }
        print '</div>';
    break;

    case "four_container":
        print '<div class="views_iiv l-secondary row">';
        if (!empty($title)) {
            print "<h3>$title</h3>";
        }

        foreach ($rows as $id => $row) {
            print '<div class="col-lg-3 col-md-4 col-sm-6 ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
        }
        print '</div>';
    break;

}

?>
