<?php
// auto-generated by sfRoutingConfigHandler
// date: 2013/01/27 15:53:47
$this->routes['homepage'] = unserialize('C:7:"sfRoute":1061:{a:11:{i:0;a:2:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:3:{i:0;s:9:"separator";i:1;s:1:"/";i:2;s:1:"/";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:1:"/";i:4;s:0:"";i:5;s:6:"#^/$#x";i:6;a:0:{}i:7;a:2:{s:6:"module";s:4:"page";s:6:"action";s:4:"show";}i:8;a:0:{}i:9;s:1:"/";i:10;b:0;}}');
$this->routes['page'] = unserialize('C:15:"sfDoctrineRoute":1483:{a:11:{i:0;a:4:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:4:"page";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:5:"model";s:4:"Page";s:4:"type";s:4:"list";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:16:"/page.:sf_format";i:4;s:5:"/page";i:5;s:39:"#^/page(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:1:{s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:4:"page";s:6:"action";s:5:"index";s:9:"sf_format";s:4:"html";}i:8;a:3:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:2:{i:0;s:3:"get";i:1;s:4:"head";}s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['page_new'] = unserialize('C:15:"sfDoctrineRoute":1596:{a:11:{i:0;a:6:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:4:"page";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"new";i:3;N;}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:17:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:5:"model";s:4:"Page";s:4:"type";s:6:"object";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:20:"/page/new.:sf_format";i:4;s:9:"/page/new";i:5;s:43:"#^/page/new(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:1:{s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:4:"page";s:6:"action";s:3:"new";s:9:"sf_format";s:4:"html";}i:8;a:3:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:2:{i:0;s:3:"get";i:1;s:4:"head";}s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['page_create'] = unserialize('C:15:"sfDoctrineRoute":1457:{a:11:{i:0;a:4:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:4:"page";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:17:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:5:"model";s:4:"Page";s:4:"type";s:6:"object";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:16:"/page.:sf_format";i:4;s:5:"/page";i:5;s:39:"#^/page(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:1:{s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:4:"page";s:6:"action";s:6:"create";s:9:"sf_format";s:4:"html";}i:8;a:3:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:1:{i:0;s:4:"post";}s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['page_edit'] = unserialize('C:15:"sfDoctrineRoute":1773:{a:11:{i:0;a:8:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:4:"page";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:3:":id";i:3;s:2:"id";}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:4:"edit";i:3;N;}i:6;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:7;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:5:"model";s:4:"Page";s:4:"type";s:6:"object";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:25:"/page/:id/edit.:sf_format";i:4;s:5:"/page";i:5;s:56:"#^/page/(?P<id>\\d+)/edit(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:2:{s:2:"id";s:3:":id";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:4:"page";s:6:"action";s:4:"edit";s:9:"sf_format";s:4:"html";}i:8;a:3:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:2:{i:0;s:3:"get";i:1;s:4:"head";}s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['page_update'] = unserialize('C:15:"sfDoctrineRoute":1633:{a:11:{i:0;a:6:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:4:"page";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:3:":id";i:3;s:2:"id";}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:5:"model";s:4:"Page";s:4:"type";s:6:"object";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:20:"/page/:id.:sf_format";i:4;s:5:"/page";i:5;s:51:"#^/page/(?P<id>\\d+)(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:2:{s:2:"id";s:3:":id";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:4:"page";s:6:"action";s:6:"update";s:9:"sf_format";s:4:"html";}i:8;a:3:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:1:{i:0;s:3:"put";}s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['page_delete'] = unserialize('C:15:"sfDoctrineRoute":1636:{a:11:{i:0;a:6:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:4:"page";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:3:":id";i:3;s:2:"id";}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:5:"model";s:4:"Page";s:4:"type";s:6:"object";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:20:"/page/:id.:sf_format";i:4;s:5:"/page";i:5;s:51:"#^/page/(?P<id>\\d+)(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:2:{s:2:"id";s:3:":id";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:4:"page";s:6:"action";s:6:"delete";s:9:"sf_format";s:4:"html";}i:8;a:3:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:1:{i:0;s:6:"delete";}s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['page_show'] = unserialize('C:15:"sfDoctrineRoute":1646:{a:11:{i:0;a:6:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:4:"page";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:3:":id";i:3;s:2:"id";}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:5:"model";s:4:"Page";s:4:"type";s:6:"object";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:20:"/page/:id.:sf_format";i:4;s:5:"/page";i:5;s:51:"#^/page/(?P<id>\\d+)(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:2:{s:2:"id";s:3:":id";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:4:"page";s:6:"action";s:4:"show";s:9:"sf_format";s:4:"html";}i:8;a:3:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:2:{i:0;s:3:"get";i:1;s:4:"head";}s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
