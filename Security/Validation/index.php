<?php
$untrusted_input = '1 malicious string'; // will evaluate to integer 1 during loose comparisons

if (1 === $untrusted_input) { // == would have evaluated to true, but === evaluates to false
    echo '<p>Valid data';
} else {
    echo ('Invalid data');
}

$safe_values     = array(1, 5, 7);

if (in_array($untrusted_input, $safe_values, true)) {  // `true` enables strict type checking
    echo '<p>Valid data';
} else {
    echo ('Invalid data');
}

$untrusted_input = '1 malicious string';  // will evaluate to integer 1 during loose comparisons

switch (true) {
    case 1 === $untrusted_input:  // do your own strict comparison instead of relying on switch()'s loose comparison
        echo '<p>Valid data';
        break;

    default:
        echo ('Invalid data');
}
