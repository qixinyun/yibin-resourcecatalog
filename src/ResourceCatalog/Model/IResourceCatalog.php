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
        IUserGroup::ID['SWBB'] => array(self::TYPE['SYDWFRDJXX']),
        IUserGroup::ID['SKJJ'] => array(self::TYPE['JXSZLJDW']),
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
        IUserGroup::ID['SMZJ'] => array(
            self::TYPE['MZSHTTHMBFQYDW'],
            self::TYPE['SHZZNJXX'],
            self::TYPE['GRRYXXMZJ'],
            self::TYPE['MBFQYML'],
            self::TYPE['SHTTDJXX']
        ),
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
        IUserGroup::ID['SJTYSJ'] => array(self::TYPE['SLYSXKZXX'], self::TYPE['GRRYXXJTJ']),
        IUserGroup::ID['SSLJ'] => array(self::TYPE['ESCJDPGJGHZZS']),
        IUserGroup::ID['SNYNCJ'] => array(self::TYPE['GJJLTQYRZXX']),
        IUserGroup::ID['SLYHZYJ'] => array(self::TYPE['QSLHXJJTJL']),
        IUserGroup::ID['SQXJ'] => array(self::TYPE['QXTCHJBHJDXX']),
        IUserGroup::ID['SSWJ'] => array(self::TYPE['ESCJDPGJGHZZS']),
        IUserGroup::ID['SWHGBDSHLYJ'] => array(
            self::TYPE['DYZGXX'],
            self::TYPE['YXZZDWJBGXX'],
            self::TYPE['GRRYXXGDJ'],
            self::TYPE['JGRYXXSWGXJ']
        ),
        IUserGroup::ID['SWSJKWYH'] => array(
            self::TYPE['HSZYZGZXX'],
            self::TYPE['YSZYZCHBGZC'],
            self::TYPE['YSZYZGZXX'],
            self::TYPE['WSHJHSYWYHJCXX'],
            self::TYPE['YLHJSFWJGXX'],
            self::TYPE['JBYFKZJGXX'],
            self::TYPE['FYCRYJLXX'],
            self::TYPE['WSZYJSZGKSWJXX'],
            self::TYPE['QSWCXXXJDWBZ']
        ),

        IUserGroup::ID['SSJJ'] => array(),
        IUserGroup::ID['SSCJDGLJ'] => array(
            self::TYPE['QYJBXX'],
            self::TYPE['GTGSHXX'],
            self::TYPE['CMQYSBXX'],
            self::TYPE['YPLSQYXX'],
            self::TYPE['JGRYXX'],
            self::TYPE['SXQYHMD'],
            self::TYPE['SPYPTSJBJLGR'],
            self::TYPE['SPYPTSJBJLDW'],
            self::TYPE['JXMPCPXX'],
            self::TYPE['QYYCMLXX'],
            self::TYPE['QYZXXX'],
            self::TYPE['QYDXXX'],
            self::TYPE['CCJCJGXX']
        ),
        IUserGroup::ID['SJJHZHWSJ'] => array(),
        IUserGroup::ID['SZWFWHFGJJFZJ'] => array(),
        IUserGroup::ID['SYJGLJ'] => array(),
        IUserGroup::ID['SGZW'] => array(self::TYPE['QYRYXX']),
        IUserGroup::ID['STJJ'] => array(
            self::TYPE['DTJXJGRXX'], 
            self::TYPE['TJDCDXML']
        ),
   
        IUserGroup::ID['SRFB'] => array(),
        IUserGroup::ID['SZSCQJ'] => array(),
        IUserGroup::ID['SJRGZJ'] => array(),
        IUserGroup::ID['SSHUIWJ'] => array(
            self::TYPE['QYGSZXXX'], 
            self::TYPE['AJNSRXX'],
            self::TYPE['QYDSXZCFXX']
        ),
        IUserGroup::ID['SDAJ'] => array(
            self::TYPE['DZDAGZZDWGRBZJL']
        ),
        IUserGroup::ID['SFZJZJ'] => array(),
        IUserGroup::ID['SFGJ'] => array(
            self::TYPE['SPFYSXK'],
            self::TYPE['FDCKFQYZZXX'],
            self::TYPE['JGRYXXSFGJ']
        ),
        IUserGroup::ID['YBHG'] => array(),
        IUserGroup::ID['TSW'] => array(self::TYPE['YXQNZYZ']),
        IUserGroup::ID['SCL'] => array(),
        IUserGroup::ID['SWDX'] => array(),
        IUserGroup::ID['SGSL'] => array(),
        IUserGroup::ID['YBYBJFJ'] => array((self::TYPE['YHYJRJGCFXX']),
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
