<?php
function report($bulan) {
	if ($bulan < 3) {
		$status = 'Report sudah tersedia';
	} else {
		$status = 'Report sudah tersedia';
	}
	return $status;
}
echo report(2); // Hasil Report sudah tersedia;
