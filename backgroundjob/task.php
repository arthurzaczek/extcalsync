<?php

namespace OCA\ExtCalSync\Backgroundjob;

class Task {
	static public function run() {
		 \OC_Log::write('ExtCalSync', 'Calling sync job', \OC_Log::DEBUG);
	}
}
