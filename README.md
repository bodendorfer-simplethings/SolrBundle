SimpleThingsSolrBundle
======================


Installing
==========

```bash
$ composer require simplethings/solr-bundle
```

```php
public function registerBundles()
{
    // ...
    new Nelmio\SolariumBundle\NelmioSolariumBundle(),
    new SimpleThings\Bundle\SolrBundle\SimpleThingsSolrBundle(),
    // ...
}
```

Configuration
=============
app/config/config.yml
```yaml
simple_things_solr:
    config_files:
      -
        prefix: Acme\Bundle\AcmeBundle\Entity
        path: "%kernel.root_dir%/../src/Acme/Bundle/AcmeBundle/Resources/config/solr"
```

src/Acme/Bundle/AcmeBundle/Resources/config/solr/Blog.yml
```yaml
Acme\Bundle\AcmeBundle\Entity\Blog:
  type: document
  fields:
    id: id
    name: 
      type: text
      full_text: true
    text:
      type: textSpell
      full_text: true
```
