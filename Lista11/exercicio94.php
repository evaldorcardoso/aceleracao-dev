<?php

    interface IHeader{
        public function getTemplateString():string;
    }

    class ReactHeader implements IHeader
    {
        public function getTemplateString():string
        {
            return "<h1>[[ title ]]</h1>";
        }
    }

    class VueHeader implements IHeader
    {
        public function getTemplateString():string
        {
            return "<h1>{{ page.title }}</h1>";
        }
    }

    interface IBody{
        public function getTemplateString():string;
    }

    class ReactBody implements IBody
    {
        public function getTemplateString():string
        {
            return "<p>[[ description ]]</p>";
        }
    }

    class VueBody implements IBody
    {
        public function getTemplateString():string
        {
            return "<p>{{ page.description }}</p>";
        }
    }

    interface IFooter{
        public function getTemplateString():string;
    }

    class ReactFooter implements IFooter
    {
        public function getTemplateString():string
        {
            return "<p>[[ footer ]]</p>";
        }
    }

    class VueFooter implements IFooter
    {
        public function getTemplateString():string
        {
            return "<p>{{ page.footer }}</p>";
        }
    }
    
    interface IFrameworkTemplate{
        function montaHeader():IHeader;
        function montaBody():IBody;
        function montaFooter():IFooter;
    }

    class ReactFactory implements IFrameworkTemplate{
        public function montaHeader():IHeader
        {
            return new ReactHeader();
        }
        public function montaBody():IBody
        {
            return new ReactBody();
        }
        public function montaFooter():IFooter
        {
            return new ReactFooter();
        }
    }

    class VueFactory implements IFrameworkTemplate{
        public function montaHeader():IHeader
        {
            return new VueHeader();
        }
        public function montaBody():IBody
        {
            return new VueBody();
        }
        public function montaFooter():IFooter
        {
            return new VueFooter();
        }
    }