<?php
$folder_path = 'csv';
$csv_files = glob($folder_path . '/*.csv');
$data = [];

//get data 
foreach ($csv_files AS $csv_file) {
    if (($handle = fopen($csv_file, 'r')) !== false) {
        while (($row = fgetcsv($handle)) !== false) {
            $data[] = $row;
        }
        fclose($handle);
    }
}

//set data
$array_popular = [];
$array_data = [];
foreach($data AS $key => $value){
    if($key > 0 && $value[0] != 'World' && $value[0] != 'Asia (UN)' && $value[0] != 'Less developed regions' 
    && $value[0] != 'Less developed regions, excluding least developed countries' && $value[0] != 'Less developed regions, excluding China'
    && $value[0] != 'Low-income countries' && $value[0] != 'Upper-middle-income countries'
    && $value[0] != 'Lower-middle-income countries' && $value[0] != 'More developed regions'
    && $value[0] != 'High-income countries' && $value[0] != 'Least developed countries'
    && $value[0] != 'Africa (UN)' && $value[0] != 'Europe (UN)'
    && $value[0] != 'Latin America and the Caribbean (UN)' && $value[0] != 'Land-locked developing countries (LLDC)'
    && $value[0] != 'Northern America (UN)' && $value[0] != 'United States' && $value[0] != 'United Kingdom'){
        $array_data[$value[1]][$key]['country_name'] = $value[0];
        $array_data[$value[1]][$key]['population'] = intval($value[2]);
        $array_data[$value[1]][$key]['color'] = "#80B7A2";
        $array_data[$value[1]] = array_values($array_data[$value[1]]); 
    }
}

//set format data for chart
foreach($array_data AS $key => $value_year){ 
    $array_popular[$key]['year'] = $key;
    $total_popular = 0;
    foreach($value_year AS $key_popular => $value_popular){
        $total_popular += $value_popular['population'];
    }
    $array_popular[$key]['population_all'] = number_format($total_popular);

    usort($value_year, function($a, $b) {
        return $b["population"] - $a["population"];
    });
    $top10_limit = array_slice($value_year, 0, 10);
    
    $array_popular[$key]['data'] = $top10_limit;
}

$array_popular = array_values($array_popular);

echo json_encode($array_popular);

?>