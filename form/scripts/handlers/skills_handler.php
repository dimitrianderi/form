<?php
function skills_handler($data) {
    $skills_arr = [];
    foreach ($_REQUEST['skills'] as $skill) {
        $skills_arr[] = $data->skills->{$skill};
    }
    return $skills_arr;
}

?>