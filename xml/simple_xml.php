<?php

$xml = <<<EOF
<Basket>
    <Fruit>
        <Name>apple</Name>
    </Fruit>
    <Fruit>
        <Name>peach</Name>
        <Price></Price>
    </Fruit>
    <Fruit>
        <Name>pear</Name>
    </Fruit>
</Basket>
EOF;

$basketElement = new SimpleXMLElement($xml);

var_dump($basketElement->Fruit[2]->Unknown);

if (empty($basketElement->Fruit[2]->Unknown)) {
    echo "This object is empty or does not exist\n";
}

echo "{$basketElement->Fruit[2]->count()}\n"; // output: 1
echo "{$basketElement->Fruit[2]->Unknown->count()}\n"; // output: O Win! I can use count() instead of empty() to check if the element is empty
echo "{$basketElement->Fruit[2]->Price->count()}\n"; // output: O

if (0 === $basketElement->Fruit[2]->Unknown->count()) {
    echo "This object is empty or does not exist\n";
}

if (0 === $basketElement->Fruit[2]->Price->count()) {
    echo "This object is empty or does not exist\n";
}

var_dump($basketElement->Fruit[2]->Price);

foreach ($basketElement->Fruit as $fruit) {
    echo "$fruit->Name\n";
}
