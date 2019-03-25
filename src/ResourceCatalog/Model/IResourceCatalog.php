<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList
{
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'TEST' => 500
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK']
        ),
        IUserGroup::ID['FZHGGWYH'] => array(self::TYPE['TEST']),
        IUserGroup::ID['BGS'] => array(),
        IUserGroup::ID['GYHJMRHJ'] => array(),
        IUserGroup::ID['TYJRSWJ'] => array(),
        IUserGroup::ID['YJGLJ'] => array(),
        IUserGroup::ID['SCJDGLJ'] => array(),
        IUserGroup::ID['FPKFJ'] => array(),
        IUserGroup::ID['GAJ'] => array(),
        IUserGroup::ID['CZJ'] => array(),
        IUserGroup::ID['XFJ'] => array(),
        IUserGroup::ID['GYZCJDGLWYH'] => array(),
        IUserGroup::ID['JYHTYJ'] => array(),
        IUserGroup::ID['SFJ'] => array(),
        IUserGroup::ID['RLZYHSHBZJ'] => array(),
        IUserGroup::ID['JRGZJ'] => array(),
        IUserGroup::ID['ZRZYHGHJ'] => array(),
        IUserGroup::ID['JJHZHWSJ'] => array(),
        IUserGroup::ID['SLJ'] => array(),
        IUserGroup::ID['YLBZJ'] => array(),
        IUserGroup::ID['LYHZYJ'] => array(),
        IUserGroup::ID['JTYSJ'] => array(),
        IUserGroup::ID['ZWFWHFGJJFZJ'] => array(),
        IUserGroup::ID['DXCKCCJSFWJ'] => array(),
        IUserGroup::ID['STHJJ'] => array(),
        IUserGroup::ID['SWJ'] => array(),
        IUserGroup::ID['MZJ'] => array(),
        IUserGroup::ID['NYNCJ'] => array(),
        IUserGroup::ID['WHGBDSHLYJ'] => array(),
        IUserGroup::ID['WSJKWYH'] => array(),
        IUserGroup::ID['SJJ'] => array(),
        IUserGroup::ID['TJJ'] => array(),
        IUserGroup::ID['ZFHCXJSJ'] => array(),
        IUserGroup::ID['KXJSJ'] => array(),
        IUserGroup::ID['CPQFGW'] => array(),
        IUserGroup::ID['NXQFGW'] => array(),
        IUserGroup::ID['YBXFGW'] => array(),
        IUserGroup::ID['JAXFGW'] => array(),
        IUserGroup::ID['CNXFGW'] => array(),
        IUserGroup::ID['GXFGW'] => array(),
        IUserGroup::ID['JLXFGW'] => array(),
        IUserGroup::ID['HXFGW'] => array(),
        IUserGroup::ID['XWXFGW'] => array(),
        IUserGroup::ID['PSXFGW'] => array()
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
