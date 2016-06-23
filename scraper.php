<?
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';

$html = scraperwiki::scrape("http://indiegogo.com");

$dom = new simple_html_dom();
$dom->load($html);
print_r($dom->find("table.list"));

scraperwiki::save_sqlite(array('name'), array('name' => 'susan', 'occupation' => 'software developer'));
scraperwiki::select("* from data where 'name'='peter'")

?>
