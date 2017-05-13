<?php

if(!defined("LOADING_DATA")) die("Do NOT load data file directly.");
# partial file; see data.php

# User types
$roles = (new datafiller("account_roles"))
    ->row("8B2E54D8-0C4F-4A37-9848-1031929D3C01", "1", "Super Admin", "Super Administrator")
    ->row("8B2E54D8-0C4F-4A37-9848-1031929D3C02", "2", "Admin", "Administrator")
    ->row("8B2E54D8-0C4F-4A37-9848-1031929D3C03", "3", "Accounts", "Finance")
    ->row("8B2E54D8-0C4F-4A37-9848-1031929D3C04", "4", "Human Resource", "Finance")
    ->row("8B2E54D8-0C4F-4A37-9848-1031929D3C05", "5", "Finance", "Finance")
    ->row("8B2E54D8-0C4F-4A37-9848-1031929D3C06", "6", "Member", "Member only")
    ->row("8B2E54D8-0C4F-4A37-9848-1031929D3C07", "7", "Customer", "Registered Customer")
    ->row("8B2E54D8-0C4F-4A37-9848-1031929D3C08", "8", "Visitor", "For all unregistered users")
    ->row("8B2E54D8-0C4F-4A37-9848-1031929D3C09", "9", "All", "Anyone")
;

# demo users
$users = (new datafiller("account_users"))
    ->row("8F6FCADB-B22F-7000-131C-74C16780F00B", "superadmin")
    ->row("0E227B20-A31C-8974-9931-0AF30C099047", "admin")
    ->row("FC846527-719F-F0D0-C314-74A35F4AC866", "accounts")
    ->row("EC47FB16-A890-86BC-49D2-F21E35DBD1F7", "hr")
    ->row("2E3AB32C-A976-4D26-C460-17C831607DAC", "finance")
    ->row("D1C7537E-7B9B-3E9B-6D6F-51182C789676", "member")
    ->row("88732FA4-5C6B-8D32-158E-6A6ECEE75B42", "customer")
    ->row("9B4BB459-D61F-7C6D-ED3A-B8C625730E45", "visitor")
    ->row("AE5CA30E-4760-6C09-9910-B9F73F7B218D", "public")
;

# hasing algorithms
$algorithms = (new datafiller("account_algorithms"))
	->row("57BD1772-3CE0-4313-B22F-E69FA653AF03", "1", "SHA1 n Times", "md5")
	->row("9BDAD5A0-D558-43F1-B17A-BB716CCBC568", "2", "MD5 n Times", "md5")
	->row("C9F0A4FE-2443-469C-BCA4-272289E7D29B", "3", "SHA2 n Times", "md5")
	->row("D39BF302-DCC7-49A3-AFE6-7AC04C57951A", "4", "Normal", "md5")
	->row("FD638558-4ACA-47B4-BF23-10AFFD0D3575", "5", "Mixed n Times", "md5")
;