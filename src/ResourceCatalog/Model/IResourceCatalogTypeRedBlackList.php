<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeRedBlackList
{
    const TYPE_RED_BLACK_LIST = array(
        IResourceCatalog::TYPE['NULL'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['XBXZCF'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['XBXZXK'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['MZSHTTHMBFQYDW'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['QYJBXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['QYYCMLXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['SXQYHMD'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        IResourceCatalog::TYPE['DYZGXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['TEST'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL']
    );
}
