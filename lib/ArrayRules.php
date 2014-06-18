<?php
/**
 * AhrefsAPI v.0.1. Ahrefs.com API V2 wrapper for PHP
 *
 *
 * - https://ahrefs.com/api/documentation.php
 *
 *
 * Date: 18th December 2013
 *
 */
abstract class ArrayRules {
    /**
     * Class Variables
     * @var Array	$where		Translation for "where" and "having" functions
     * @var Array 	$functions	List of available functions
     * @var Array 	$column 	List of available column for "select", "order_by", "where" and "having"
     */

    public static $quotedValue = array(
        'substring', 'word', 'subdomain'
    );

    public static $where = array(
            'ne' => '<>',
            'eq' => '=',
            'lt' => '<',
            'gt' => '>',
            'lte' => '<=',
            'gte' => '>=',
            'substring' => 'substring',
            'word' => 'word',
            'subdomain' => 'subdomain',
    );
    public static $functions = array(
            "to" => array('json', 'xml','php'),
            "set" => array('target','limit','offset','output'),
            "where" => array('eq','ne','lt', 'gt', 'lte', 'gte', 'substring','word','subdomain'),
            "having" => array('eq','ne','lt', 'gt', 'lte', 'gte', 'substring','word','subdomain'),
            "mode" => array('exact', 'domain', 'subdomains', 'prefix'),
            "get" => array(
                    'ahrefs_rank',
                    'anchors',
                    'anchors_refdomains',
                    'backlinks', 
                    'backlinks_new_lost', 
                    'backlinks_new_lost_counters', 
                    'domain_rating',
                    'linked_anchors',
                    'linked_domains',
                    'metrics',
                    'metrics_extended', 
                    'pages', 
                    'pages_extended',
                    'refdomains',
                    'refdomains_new_lost',
                    'refdomains_new_lost_counters',
                    'subscription_info'
            ),
            "prepare" => array(
                    'ahrefs_rank',
                    'anchors',
                    'anchors_refdomains',
                    'backlinks',
                    'backlinks_new_lost',
                    'backlinks_new_lost_counters',
                    'domain_rating',
                    'linked_anchors',
                    'linked_domains',
                    'metrics',
                    'metrics_extended',
                    'pages',
                    'pages_extended',
                    'refdomains',
                    'refdomains_new_lost',
                    'refdomains_new_lost_counters'
            ),
            "order" => array('by'),
    );
    public static $columns = array(
            "ahrefs_rank" => array(
                    "url" => array('string', true, true),
                    "ahrefs_rank" => array('int', false, true),
            ),
            "anchors" => array(
                    "anchor" => array('string', true, true),
                    "backlinks" => array('int', true, true),
                    "refpages" => array('int', true, true),
                    "refdomain" => array('string', true, false),
                    "refdomains" => array('int', false, true),
                    "first_seen" => array('date', true, true),
                    "last_visited" => array('date', true, true),
            ),
            "anchors_refdomains" => array(
                    "anchor" => array('string', true, false),
                    "anchors" => array('int', false, true),
                    "backlinks" => array('int', true, true),
                    "refdomain" => array('string', true, true),
            ),
            "backlinks" => array(
                    "url_from" => array('string', true, true),
                    "url_to" => array('string', true, true),
                    "ahrefs_rank" => array('int', true, true),
                    "domain_rating" => array('int', false, true),
                    "ip_from" => array('string', true, true),
                    "links_internal" => array('int', true, true),
                    "links_external" => array('int', true, true),
                    "page_size" => array('int', true, true),
                    "encoding" => array('string', true, true),
                    "title" => array('string', true, true),
                    "first_seen" => array('date', true, true),
                    "last_visited" => array('date', true, true),
                    "prev_visited" => array('date', true, true),
                    "sitewide" => array('boolean', true, true),
                    "original" => array('boolean', true, true),
                    "link_type" => array('string', true, true),
                    "redirect" => array('int', true, true),
                    "nofollow" => array('boolean', true, true),
                    "alt" => array('string', true, true),
                    "anchor" => array('string', true, true),
                    "text_pre" => array('string', true, true),
                    "text_post" => array('string', true, true),
            ),
            "backlinks_new_lost" => array(
                    "date" => array('date', true, true),
                    "type" => array('string', true, true),
                    "ahrefs_rank" => array('int', true, true),
                    "domain_rating" => array('int', true, true),
                    "url_from" => array('string', true, true),
                    "url_to" => array('string', true, true),
                    "links_internal" => array('int', true, true),
                    "links_external" => array('int', true, true),
                    "encoding" => array('string', true, true),
                    "http_code" => array('int', true, true),
                    "title" => array('string', true, true),
                    "origin" => array('string', true, true),
                    "first_seen" => array('date', true, true),
                    "last_visited" => array('date', true, true),
                    "prev_visited" => array('date', true, true),
                    "sitewide" => array('boolean', true, true),
                    "original" => array('boolean', true, true),
                    "link_type" => array('string', true, true),
                    "redirect" => array('int', true, true),
                    "nofollow" => array('boolean', true, true),
                    "alt" => array('string', true, true),
                    "anchor" => array('string', true, true),
                    "text_pre" => array('string', true, true),
                    "text_post" => array('string', true, true),
            ),
            "backlinks_new_lost_counters" => array(
                    "date" => array('date', true, true),
                    "type" => array('string', true, false),
                    "ahrefs_rank" => array('int', true, false),
                    "domain_rating" => array('int', true, false),
                    "url_from" => array('string', true, false),
                    "url_to" => array('string', true, true),
                    "links_internal" => array('int', true, false),
                    "links_external" => array('int', true, false),
                    "encoding" => array('string', true, false),
                    "http_code" => array('int', true, false),
                    "title" => array('string', true, false),
                    "origin" => array('string', true, false),
                    "first_seen" => array('date', true, false),
                    "last_visited" => array('date', true, false),
                    "prev_visited" => array('date', true, false),
                    "sitewide" => array('boolean', true, false),
                    "original" => array('boolean', true, false),
                    "link_type" => array('string', true, false),
                    "redirect" => array('int', true, false),
                    "nofollow" => array('boolean', true, false),
                    "alt" => array('string', true, false),
                    "anchor" => array('string', true, false),
                    "text_pre" => array('string', true, false),
                    "text_post" => array('string', true, false),
                    "new" => array('int', false, true),
                    "lost" => array('int', false, true),
                    "new_total" => array('int', false, true),
                    "lost_total" => array('int', false, true),
            ),
            "domain_rating" => array(
                    "domain_rating" => array('int', false, true),
            ),
            "linked_anchors" => array(
                "anchor" => array('string', true, true),
                "links_internal" => array('string', false, true),
                "links_external" => array('int', false, true)
            ),
            "linked_domains" => array(
                    "domain_from" => array('string', false, true),
                    "domain_to" => array('string', false, true),
                    "links" => array('int', false, true),
                    "unique_pages" => array('int', false, true),
                    "domain_to_rating" => array('int', false, true),
            ),
            "metrics" => array(
                    "backlinks" => array('int', false, false),
                    "refpages" => array('int', false, false),
                    "pages" => array('int', false, false),
                    "text" => array('int', false, false),
                    "image" => array('int', false, false),
                    "sitewide" => array('int', false, false),
                    "not_sitewide" => array('int', false, false),
                    "nofollow" => array('int', false, false),
                    "dofollow" => array('int', false, false),
                    "redirect" => array('int', false, false),
                    "gov" => array('int', false, false),
                    "edu" => array('int', false, false),
                    "html_pages" => array('int', false, false),
                    "links_internal" => array('int', false, false),
                    "links_external" => array('int', false, false),
            ),
            'metrics_extended' => array(
                    "backlinks" => array('int', false, false),
                    "refpages" => array('int', false, false),
                    "pages" => array('int', false, false),
                    "text" => array('int', false, false),
                    "image" => array('int', false, false),
                    "sitewide" => array('int', false, false),
                    "not_sitewide" => array('int', false, false),
                    "nofollow" => array('int', false, false),
                    "dofollow" => array('int', false, false),
                    "redirect" => array('int', false, false),
                    "gov" => array('int', false, false),
                    "edu" => array('int', false, false),
                    "html_pages" => array('int', false, false),
                    "links_internal" => array('int', false, false),
                    "links_external" => array('int', false, false),
                    "refdomains" => array('int', false, false),
                    "refclass_c" => array('int', false, false),
                    "refips" => array('int', false, false),
            ),
            'pages' => array(
                    'url' => array('string', true, true),
                    'ahrefs_rank' => array('int', true, true),
                    'last_visited' => array('date', true, true),
                    'http_code' => array('int', true, true),
                    'size' => array('int', true, true),
                    'links_internal' => array('int', true, true),
                    'links_external' => array('int', true, true),
                    'encoding' => array('string', true, true),
                    'title' => array('string', true, true),
                    'redirect_url' => array('string', true, true),
                    'content_encoding' => array('string', true, true),
            ),
            'pages_extended' => array(
                    'url' => array('string', true, true),
                    'ahrefs_rank' => array('int', true, true),
                    'last_visited' => array('date', true, true),
                    'http_code' => array('int', true, true),
                    'size' => array('int', true, true),
                    'links_internal' => array('int', true, true),
                    'links_external' => array('int', true, true),
                    'encoding' => array('string', true, true),
                    'title' => array('string', true, true),
                    'redirect_url' => array('string', true, true),
                    'content_encoding' => array('string', true, true),
                    'backlinks' => array('int', true, true),
                    'dofollow' => array('int', true, true),
                    'nofollow' => array('int', true, true),
                    'redirects' => array('int', true, true),
                    'refdomains' => array('int', true, true),
                    'refclass_c' => array('int', true, true),
                    'refips' => array('int', true, true),
            ),
            'refdomains' => array(
                    'url' => array('string', true, false),
                    'ip' => array('string', true, false),
                    'refdomain' => array('string', true, true),
                    'backlinks' => array('int', true, true),
                    'refpages' => array('int', true, true),
                    'first_seen' => array('date', true, true),
                    'last_visited' => array('date', true, true),
                    'domain_rating' => array('int', false, true),
            ),
            'refdomains_new_lost_counters' => array(
                    'date' => array('date', true, true),
                    'type' => array('string', true, false),
                    'refdomain' => array('string', true, false),
                    'new' => array('int', false, true),
                    'lost' => array('int', false, true),
                    'new_total' => array('int', false, true),
                    'lost_total' => array('int', false, true),
            ),
            'refdomains_new_lost' => array(
                    'date' => array('date', true, true),
                    'type' => array('string', true, true),
                    'refdomain' => array('string', true, true),
                    'domain_rating' => array('int', false, true),
            ),
            'subscription_info' => array(
                'rows_left' => array('int', false, false),
                'rows_limit' => array('int', false, false),
                'subscription' => array('string', false, false),
            )
    );
}
