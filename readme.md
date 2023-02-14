# ReaXML Parser for PHP

This is a simple set of classes to parse a ReaXML formatted XML file into usable PHP objects.

ReaXML Feed schema and information from http://reaxml.realestate.com.au/propertyList.dtd and http://reaxml.realestate.com.au/docs/reaxml1-xml-format.html

## Installation
`composer require unetics/reaxml-parser`

## Usage
    require_once('vendor/autoload.php');
    use ThinkReaXMLParser\Parser;
    $parser = new Parser($full_path_to_xml_file);
    $data = $parser->parse();
    foreach ($data as $listing) {
        echo $listing->getUniqueId();
    }

## License
This software is released under the Apache v2.0 License:
http://www.apache.org/licenses/LICENSE-2.0
