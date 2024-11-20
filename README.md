# Wordpress
projeto de wordpress consumindo API
### Api criada
`http://localhost/mywordpress/wp-json/wp/v2/todosprodutos/`
### Resposta da Api
```json
[
    {
        "id": 93,
        "date": "2024-11-20T15:28:58",
        "date_gmt": "2024-11-20T18:28:58",
        "guid": {
            "rendered": "http://localhost/mywordpress/?post_type=produto&#038;p=93"
        },
        "modified": "2024-11-20T16:06:25",
        "modified_gmt": "2024-11-20T19:06:25",
        "slug": "creatina",
        "status": "publish",
        "type": "produto",
        "link": "http://localhost/mywordpress/produto/creatina/",
        "title": {
            "rendered": "creatina"
        },
        "content": {
            "rendered": "",
            "protected": false
        },
        "excerpt": {
            "rendered": "",
            "protected": false
        },
        "author": 1,
        "featured_media": 0,
        "menu_order": 0,
        "comment_status": "open",
        "ping_status": "open",
        "template": "",
        "format": "standard",
        "meta": {
            "_acf_changed": false,
            "footnotes": ""
        },
        "class_list": [
            "post-93",
            "produto",
            "type-produto",
            "status-publish",
            "format-standard",
            "hentry"
        ],
        "acf": {
            "marca": "Max Titanium",
            "quantidade": 300,
            "site_official": "https://www.maxtitanium.com.br/?srsltid=AfmBOop36ZomTgPe2vGVoa6raPmAmuDHb7B4y09TEySa8Amday3YfoFs",
            "descricao": "Marca favorita do Renato Cariani, recomendada mundialmente.\r\n100% creatina\r\ntop 10 melhores marcas no mercado\r\npreço justo e qualidade",
            "img": 95
        },
        "_links": {
            "self": [
                {
                    "href": "http://localhost/mywordpress/wp-json/wp/v2/todosprodutos/93",
                    "targetHints": {
                        "allow": [
                            "GET"
                        ]
                    }
                }
            ],
            "collection": [
                {
                    "href": "http://localhost/mywordpress/wp-json/wp/v2/todosprodutos"
                }
            ],
            "about": [
                {
                    "href": "http://localhost/mywordpress/wp-json/wp/v2/types/produto"
                }
            ],
            "author": [
                {
                    "embeddable": true,
                    "href": "http://localhost/mywordpress/wp-json/wp/v2/users/1"
                }
            ],
            "replies": [
                {
                    "embeddable": true,
                    "href": "http://localhost/mywordpress/wp-json/wp/v2/comments?post=93"
                }
            ],
            "version-history": [
                {
                    "count": 3,
                    "href": "http://localhost/mywordpress/wp-json/wp/v2/todosprodutos/93/revisions"
                }
            ],
            "predecessor-version": [
                {
                    "id": 99,
                    "href": "http://localhost/mywordpress/wp-json/wp/v2/todosprodutos/93/revisions/99"
                }
            ],
            "wp:attachment": [
                {
                    "href": "http://localhost/mywordpress/wp-json/wp/v2/media?parent=93"
                }
            ],
            "curies": [
                {
                    "name": "wp",
                    "href": "https://api.w.org/{rel}",
                    "templated": true
                }
            ]
        }
    }
]
```