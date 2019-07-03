<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeName
{
    const TYPE_NAME = array(
        IResourceCatalog::TYPE['NULL'] => '',
        IResourceCatalog::TYPE['XBXZCF'] => '2019行政处罚公示信息',
        IResourceCatalog::TYPE['XBXZXK'] => '2019行政许可公示信息',
        IResourceCatalog::TYPE['MZSHTTHMBFQYDW'] => '民政社会团体和民办非企业单位',
        IResourceCatalog::TYPE['QYJBXX'] => '企业基本信息',
        IResourceCatalog::TYPE['QYYCMLXX'] => '企业异常名录信息',
        IResourceCatalog::TYPE['SXQYHMD'] => '失信企业黑名单',
        IResourceCatalog::TYPE['DYZGXX'] => '导游资格信息',
        IResourceCatalog::TYPE['TEST'] => '演示资源目录'
    );
}
