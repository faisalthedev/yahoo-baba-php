<?php

$date = date_create("2021-09-22");
// date_add($date, date_interval_create_from_date_string("39 days"));
// date_sub($date, date_interval_create_from_date_string("39 days"));
date_modify($date, "-39 days");

echo date_format($date, "d-m-Y");
