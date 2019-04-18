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
        IUserGroup::ID['RHYBSZZ'] => array(),
        IUserGroup::ID['SWXCB'] => array(),
        IUserGroup::ID['SWXB'] => array(),
        IUserGroup::ID['SWZZB'] => array(),
        IUserGroup::ID['SJWJW'] => array(),
        IUserGroup::ID['SFY'] => array(),
        IUserGroup::ID['SJCY'] => array(),
        IUserGroup::ID['SWZFW'] => array(),
        IUserGroup::ID['SWTZB'] => array(),
        IUserGroup::ID['SWBB'] => array(),
        IUserGroup::ID['SKJJ'] => array(),
        IUserGroup::ID['SGYHJMRHJ'] => array(),
        IUserGroup::ID['SMZJ'] => array(),
        IUserGroup::ID['SJYTYJ'] => array(),
        IUserGroup::ID['SGAJ'] => array(),
        IUserGroup::ID['YBGAJ'] => array(),
        IUserGroup::ID['SMZJ'] => array(),
        IUserGroup::ID['SSFJ'] => array(),
        IUserGroup::ID['SCZJ'] => array(),
        IUserGroup::ID['SRLZYSHBZJ'] => array(),
        IUserGroup::ID['SZRZYHGHJ'] => array(),
        IUserGroup::ID['SSTHJJ'] => array(),
        IUserGroup::ID['SZFHXXJSJ'] => array(),
        IUserGroup::ID['SJTYSJ'] => array(),
        IUserGroup::ID['SSLJ'] => array(),
        IUserGroup::ID['SNYNCJ'] => array(),
        IUserGroup::ID['SLYHZYJ'] => array(),
        IUserGroup::ID['SQXJ'] => array(),
        IUserGroup::ID['SSWJ'] => array(),
        IUserGroup::ID['SWHGBDSHLYJ'] => array(),
        IUserGroup::ID['SWSJKWYH'] => array(),
        IUserGroup::ID['SSJJ'] => array(),
        IUserGroup::ID['SSCJDGLJ'] => array(),
        IUserGroup::ID['SJJHZHWSJ'] => array(),
        IUserGroup::ID['SZWFWHFGJJFZJ'] => array(),
        IUserGroup::ID['SYJGLJ'] => array(),
        IUserGroup::ID['SGZW'] => array(),
        IUserGroup::ID['STJJ'] => array(),
        IUserGroup::ID['SRFB'] => array(),
        IUserGroup::ID['SZSCQJ'] => array(),
        IUserGroup::ID['SJRGZJ'] => array(),
        IUserGroup::ID['SSWJ'] => array(),
        IUserGroup::ID['SDAJ'] => array(),
        IUserGroup::ID['SFZJZJ'] => array(),
        IUserGroup::ID['SFGJ'] => array(),
        IUserGroup::ID['YBHG'] => array(),
        IUserGroup::ID['TSW'] => array(),
        IUserGroup::ID['SCL'] => array(),
        IUserGroup::ID['SWDX'] => array(),
        IUserGroup::ID['SGSL'] => array(),
        IUserGroup::ID['YBYBJFJ'] => array(),
        IUserGroup::ID['STXB'] => array(),
        IUserGroup::ID['SYZGLJ'] => array(),
        IUserGroup::ID['SZGH'] => array(),
        IUserGroup::ID['SGXS'] => array(),
        IUserGroup::ID['SFPKFJ'] => array(),
        IUserGroup::ID['SMCH'] => array(),
        IUserGroup::ID['SFL'] => array(),
        IUserGroup::ID['CPQFGJ'] => array(),
        IUserGroup::ID['NXQFGJ'] => array(),
        IUserGroup::ID['XZQFGJ'] => array(),
        IUserGroup::ID['JAXFGJ'] => array(),
        IUserGroup::ID['CNXFGJ'] => array(),
        IUserGroup::ID['GXFGJ'] => array(),
        IUserGroup::ID['JLXFGJ'] => array(),
        IUserGroup::ID['HXFGJ'] => array(),
        IUserGroup::ID['XWXFGJ'] => array(),
        IUserGroup::ID['PSXFGJ'] => array(),
        IUserGroup::ID['LGJKQFZCHTZFWJ'] => array()
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
