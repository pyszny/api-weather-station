<?php

require 'ApiClient.php';
require 'ResponseEditor.php';

$response = ApiClient::makeApiCall();
ResponseEditor::makeList($response);

