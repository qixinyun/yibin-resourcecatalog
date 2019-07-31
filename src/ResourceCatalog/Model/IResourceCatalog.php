<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList
{
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'MZSHTTHMBFQYDW' => 3,
        'QYJBXX' => 4,
        'QYYCMLXX' => 5,
        'SXQYHMD' => 6,
        'DYZGXX' => 7,
        'TEST' => 500
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK']
        ),
        IUserGroup::ID['FZHGGWYH'] => array(self::TYPE['JGJCDXZJL'], self::TYPE['TEST'], self::TYPE['SJJXMXX']),
        IUserGroup::ID['RHYBSZZ'] => array(self::TYPE['JKQYPJAJYSMD']),
        IUserGroup::ID['SWXCB'] => array(self::TYPE['HRBXX'], self::TYPE['ZYZXX']),
        IUserGroup::ID['SWXB'] => array(),
        IUserGroup::ID['SWZZB'] => array(),
        IUserGroup::ID['SJWJW'] => array(),
        IUserGroup::ID['SFY'] => array(self::TYPE['XSPJXX'], self::TYPE['SXBZXJGXX'], self::TYPE['SXBZXRMD']),
        IUserGroup::ID['SJCY'] => array(),
        IUserGroup::ID['SWZFW'] => array(),
        IUserGroup::ID['SWTZB'] => array(),
        IUserGroup::ID['SWBB'] => array(),
        IUserGroup::ID['SKJJ'] => array(),
        IUserGroup::ID['SGYHJMRHJ'] => array(),
        IUserGroup::ID['SMZONGJ'] => array(),
        IUserGroup::ID['SJYTYJ'] => array(
            self::TYPE['JSZGXX'],
            self::TYPE['SJYXXS'],
            self::TYPE['JYJGXINXI'],
            self::TYPE['GRRYXXJYJ'],
            self::TYPE['JGRYXXSJYJ'],
            self::TYPE['PXSTYXHDJXX']
        ),
        IUserGroup::ID['SGAJ'] => array(self::TYPE['YSCRJZJJJZGRDXX'], self::TYPE['JDCWFXX']),
        IUserGroup::ID['YBGAJ'] => array(),
        IUserGroup::ID['SMZJ'] => array(self::TYPE['MZSHTTHMBFQYDW']),
        IUserGroup::ID['SSFJ'] => array(
            self::TYPE['SFJDJGCYRYZGXX'],
            self::TYPE['SFJDJGDJXX'],
            self::TYPE['GZJGJBXX'],
            self::TYPE['GZYXX'],
            self::TYPE['JCFLFWSXX'],
            self::TYPE['JCFLFWGZZJBXX'],
            self::TYPE['LSSWSXX'],
            self::TYPE['LSZYZGZXX'],
            self::TYPE['JGRYXXSSFJ']
        ),
        IUserGroup::ID['SCZJ'] => array(self::TYPE['ZFCGDLJGXX']),
        IUserGroup::ID['SRLZYSHBZJ'] => array(
            self::TYPE['ZYJNZSXX'],
            self::TYPE['YLBXXX'],
            self::TYPE['YZTQSBXXHMD'],
            self::TYPE['SYBXXX'],
            self::TYPE['SBQYXX'],
            self::TYPE['GZRYXX'],
            self::TYPE['YZTQNMGGZHMD']
        ),
        IUserGroup::ID['SZRZYHGHJ'] => array(self::TYPE['PGJGXX']),
        IUserGroup::ID['SSTHJJ'] => array(),
        IUserGroup::ID['SZFHXXJSJ'] => array(self::TYPE['ZLJCQYXX']),
        IUserGroup::ID['SJTYSJ'] => array(),
        IUserGroup::ID['SSLJ'] => array(self::TYPE['ESCJDPGJGHZZS']),
        IUserGroup::ID['SNYNCJ'] => array(),
        IUserGroup::ID['SLYHZYJ'] => array(self::TYPE['QSLHXJJTJL']),
        IUserGroup::ID['SQXJ'] => array(self::TYPE['QXTCHJBHJDXX']),
        IUserGroup::ID['SSWJ'] => array(),
        IUserGroup::ID['SWHGBDSHLYJ'] => array(self::TYPE['DYZGXX']),
        IUserGroup::ID['SWSJKWYH'] => array(),
        IUserGroup::ID['SSJJ'] => array(),
        IUserGroup::ID['SSCJDGLJ'] => array(
            self::TYPE['QYJBXX'], 
            self::TYPE['QYYCMLXX'], 
            self::TYPE['SXQYHMD']
        ),
        IUserGroup::ID['SJJHZHWSJ'] => array(),
        IUserGroup::ID['SZWFWHFGJJFZJ'] => array(),
        IUserGroup::ID['SYJGLJ'] => array(),
        IUserGroup::ID['SGZW'] => array(self::TYPE['QYRYXX']),
        IUserGroup::ID['STJJ'] => array(),
        IUserGroup::ID['SRFB'] => array(),
        IUserGroup::ID['SZSCQJ'] => array(),
        IUserGroup::ID['SJRGZJ'] => array(),
        IUserGroup::ID['SSHUIWJ'] => array(),
        IUserGroup::ID['SDAJ'] => array(),
        IUserGroup::ID['SFZJZJ'] => array(),
        IUserGroup::ID['SFGJ'] => array(),
        IUserGroup::ID['YBHG'] => array(),
        IUserGroup::ID['TSW'] => array(self::TYPE['YXQNZYZ']),
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
