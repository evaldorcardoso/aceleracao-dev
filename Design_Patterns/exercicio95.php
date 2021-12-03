<?php
    interface IFormatter{
        public function format(string $text):string;
    }

    class JsonFormatter implements IFormatter{
        public function format(mixed $text):string{
            return json_encode($text);
        }
    }

    class Report
    {
        public function getTitle()
        {
            return "Report Title";
        }

        public function getDate()
        {
            return "2018-01-22";
        }

        public function getContents()
        {
            return [
                'title' => $this->getTitle(),
                'date' => $this->getDate()
            ];
        }
    }

    $report = new Report();
    $jsonFormatter = new JsonFormatter();
    echo $jsonFormatter->format($report->getContents()); 