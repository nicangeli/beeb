<?php

class Program {
    public function get($query) {
        $headers = array('Accept' => 'application/json');

        $response = Requests::get('http://www.bbc.co.uk/iplayer/ion/searchextended/search_availability/iplayer/service_type/radio/for
mat/json/q/' . $query, $headers);

        $output = $this->filter_results($response->body);
        return $output;
    }

    private function filter_results($body) {
        // turn body into just blocklist original title, 
        $body = json_decode($body);
        $output = array();

        foreach($body->blocklist as $program) {
            $program = array(
                'title' => $program->complete_title,
                'url' => 'http://bbc.co.uk' . $program->my_url
            );
            array_push($output, $program);
        }

        return $output;
    }
}