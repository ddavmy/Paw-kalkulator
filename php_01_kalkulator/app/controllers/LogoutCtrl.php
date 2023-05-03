<?php

session_start();
session_destroy();

header("Location: ".getConf()->app_url);