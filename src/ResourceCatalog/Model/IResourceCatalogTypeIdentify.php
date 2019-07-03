<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeIdentify
{
    const TYPE_IDENTIFY = array(
        IResourceCatalog::TYPE['NULL'] => '',
        IResourceCatalog::TYPE['XBXZCF'] => 'XBXZCF',
        IResourceCatalog::TYPE['XBXZXK'] => 'XBXZXK',
        IResourceCatalog::TYPE['MZSHTTHMBFQYDW'] => 'MZSHTTHMBFQYDW',
        IResourceCatalog::TYPE['QYJBXX'] => 'QYJBXX',
        IResourceCatalog::TYPE['QYYCMLXX'] => 'QYYCMLXX',
        IResourceCatalog::TYPE['SXQYHMD'] => 'SXQYHMD',
        IResourceCatalog::TYPE['DYZGXX'] => 'DYZGXX',
        IResourceCatalog::TYPE['TEST'] => 'TEST'
    );
}
