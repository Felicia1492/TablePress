<?php
# May 7th, 2024 - Adding the following filter to disable 2FA on this site while we troubleshoot
# Email connection issues with the DoD mail server. Should be removed once resolved.
add_filter( 'wpcom_vip_is_two_factor_forced', '__return_false' );
