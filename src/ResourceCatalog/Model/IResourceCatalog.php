<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList, IResourceCatalogIsConfirm
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
        'JGJCDXZJL' => 8,
        'SJJXMXX' => 9,
        'JKQYPJAJYSMD' => 10,
        'HRBXX' => 11,
        'ZYZXX' => 12,
        'XSPJXX' => 13,
        'SXBZXJGXX' => 14,
        'SXBZXRMD' => 15,
        'SYDWFRDJXX' => 16,
        'JXSZLJDW' => 17,
        'JSZGXX' => 18,
        'SJYXXS' => 19,
        'JYJGXINXI' => 20,
        'GRRYXXJYJ' => 21,
        'JGRYXXSJYJ' => 22,
        'PXSTYXHDJXX' => 23,
        'YSCRJZJJJZGRDXX' => 24,
        'JDCWFXX' => 25,
        'SHZZNJXX' => 26,
        'GRRYXXMZJ' => 27,
        'MBFQYML' => 28,
        'SHTTDJXX' => 29,
        'SFJDJGCYRYZGXX' => 30,
        'SFJDJGDJXX' => 31,
        'GZJGJBXX' => 32,
        'GZYXX' => 33,
        'JCFLFWSXX' => 34,
        'JCFLFWGZZJBXX' => 35,
        'LSSWSXX' => 36,
        'LSZYZGZXX' => 37,
        'JGRYXXSSFJ' => 38,
        'ZFCGDLJGXX' => 39,
        'ZYJNZSXX' => 40,
        'YLBXXX' => 41,
        'YZTQSBXXHMD' => 42,
        'SYBXXX' => 43,
        'SBQYXX' => 44,
        'GZRYXX' => 45,
        'YZTQNMGGZHMD' => 46,
        'PGJGXX' => 47,
        'ZLJCQYXX' => 48,
        'SLYSXKZXX' => 49,
        'GRRYXXJTJ' => 50,
        'ESCJDPGJGHZZS' => 51,
        'GJJLTQYRZXX' => 52,
        'QSLHXJJTJL' => 53,
        'QXTCHJBHJDXX' => 54,
        'SLGCZBXX' => 55,
        'YXZZDWJBGXX' => 56,
        'GRRYXXGDJ' => 57,
        'JGRYXXSWGXJ' => 58,
        'HSZYZGZXX' => 59,
        'YSZYZCHBGZC' => 60,
        'YSZYZGZXX' => 61,
        'WSHJHSYWYHJCXX' => 62,
        'YLHJSFWJGXX' => 63,
        'JBYFKZJGXX' => 64,
        'FYCRYJLXX' => 65,
        'WSZYJSZGKSWJXX' => 66,
        'QSWCXXXJDWBZ' => 67,
        'GTGSHXX' => 68,
        'CMQYSBXX' => 69,
        'YPLSQYXX' => 70,
        'JGRYXX' => 71,
        'SPYPTSJBJLGR' => 72,
        'SPYPTSJBJLDW' => 73,
        'JXMPCPXX' => 74,
        'QYZXXX' => 75,
        'QYDXXX' => 76,
        'CCJCJGXX' => 77,
        'QYRYXX' => 78,
        'QYGSZXXX' => 79,
        'AJNSRXX' => 80,
        'QYDSXZCFXX' => 81,
        'DZDAGZZDWGRBZJL' => 82,
        'SPFYSXK' => 83,
        'FDCKFQYZZXX' => 84,
        'JGRYXXSFGJ' => 85,
        'YXQNZYZ' => 86,
        'YHYJRJGCFXX' => 87,
        'DTJXJGRXX' => 88,
        'TJDCDXML' => 89,
        'TZXMBLJGGSXX' => 90,
        'TZXMMCDMPPXX' => 91,
        'SFJDRXX' => 92,
        'SFJDJGXX' => 93,
        'LSZYXX' => 94,
        'LSNDPJXX' => 95,
        'LSSWSNDPJXX' => 96,
        'SAJLVJQ' => 97,
        'BWGXX' => 98,
        'WWSDXX' => 99,
        'WWSDGMXSJLSX' => 100,
        'QYSWJBDJXX' => 101,
        'NSXYDJPDXX' => 102,
        'QYQSGGXX' => 103,
        'FZCNSRXX' => 104,
        'LXSDJXX' => 105,
        'GRYCJJBAXX' => 106,
        'XZJLXXZRR' => 107,
        'XZJLXXFRHQTZZ' => 108,
        'QYGDZCTZXMHZHBA' => 109,
        'SBQYCBXX' => 110,
        'YLAOBXXX' => 111,
        'GRJCXX' => 112,
        'QYFRGGXYZHPJJG' => 113,
        'TQNMGGZHMD' => 114,
        'ZDLDBZWFXWGBXX' => 115,
        'XZJGQTJBXXB' => 116,
        'SYDWJBXXB' => 117,
        'JSZJBXX' => 118,
        'DFXHIMDFR' => 119,
        'DFXHIMDZRR' => 120,
        'DFXHGMDFR' => 121,
        'DFXHGMDZRR' => 122,
        'SCJRSXYZX' => 123,
        'ZDSSWFAJDSRSXYZX' => 124,
        'SCSFGWXZCFJBXXSXYZX' => 125,
        'FRBLXYJLXX' => 126,
        'ZRRBLXYJLXX' => 127,
        'YZWFCXCZYSXXDSRMDSXYZX' => 128,
        'YZZLSXQYSXYZX' => 129,
        'YCJYMLSXYZX' => 130,
        'FRCXXYJLXX' => 131,
        'ZRRCXXYJLXX' => 132,
        'CKWLJJLXX'=>133,
        'CKWLYQXX'=>134,
        'GYSYJFXXFR'=>135,
        'GYSYJFXXZRR'=>136,
        'GYSYTQFYXXFR'=>137,
        'GYSYTQFYXXZRR'=>138,
        'SXBZXRMDYPB'=>139,
        //@position_type_140
        'TEST' => 500,
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK'],
        ),
        IUserGroup::ID['FZHGGWYH'] => array(
            self::TYPE['JGJCDXZJL'],
            self::TYPE['SJJXMXX'],
            self::TYPE['TZXMBLJGGSXX'],
            self::TYPE['TZXMMCDMPPXX'],
            self::TYPE['QYGDZCTZXMHZHBA'],
            self::TYPE['QYFRGGXYZHPJJG'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
        ),
        IUserGroup::ID['RHYBSZZ'] => array(self::TYPE['JKQYPJAJYSMD'],
        self::TYPE['DFXHIMDFR'],
        self::TYPE['DFXHIMDZRR'],
        self::TYPE['DFXHGMDFR'],
        self::TYPE['DFXHGMDZRR'],
        self::TYPE['FRBLXYJLXX'],
        self::TYPE['ZRRBLXYJLXX'],
        self::TYPE['FRCXXYJLXX'],
        self::TYPE['ZRRCXXYJLXX'],),
        IUserGroup::ID['SWXCB'] => array(self::TYPE['HRBXX'], self::TYPE['ZYZXX'],
        self::TYPE['DFXHIMDFR'],
        self::TYPE['DFXHIMDZRR'],
        self::TYPE['DFXHGMDFR'],
        self::TYPE['DFXHGMDZRR'],
        self::TYPE['FRBLXYJLXX'],
        self::TYPE['ZRRBLXYJLXX'],
        self::TYPE['FRCXXYJLXX'],
        self::TYPE['ZRRCXXYJLXX'],),
        IUserGroup::ID['SWXB'] => array(
        self::TYPE['DFXHIMDFR'],
        self::TYPE['DFXHIMDZRR'],
        self::TYPE['DFXHGMDFR'],
        self::TYPE['DFXHGMDZRR'],
        self::TYPE['FRBLXYJLXX'],
        self::TYPE['ZRRBLXYJLXX'],
        self::TYPE['FRCXXYJLXX'],
        self::TYPE['ZRRCXXYJLXX'],),
        IUserGroup::ID['SWZZB'] => array(
        self::TYPE['DFXHIMDFR'],
        self::TYPE['DFXHIMDZRR'],
        self::TYPE['DFXHGMDFR'],
        self::TYPE['DFXHGMDZRR'],
        self::TYPE['FRBLXYJLXX'],
        self::TYPE['ZRRBLXYJLXX'],
        self::TYPE['FRCXXYJLXX'],
        self::TYPE['ZRRCXXYJLXX'],),
        IUserGroup::ID['SJWJW'] => array(
        self::TYPE['DFXHIMDFR'],
        self::TYPE['DFXHIMDZRR'],
        self::TYPE['DFXHGMDFR'],
        self::TYPE['DFXHGMDZRR'],
        self::TYPE['FRBLXYJLXX'],
        self::TYPE['ZRRBLXYJLXX'],
        self::TYPE['FRCXXYJLXX'],
        self::TYPE['ZRRCXXYJLXX'],),
        IUserGroup::ID['SFY'] => array(self::TYPE['SXBZXRMDYPB'],self::TYPE['XSPJXX'], self::TYPE['SXBZXJGXX'], self::TYPE['SXBZXRMD'],
        self::TYPE['DFXHIMDFR'],
        self::TYPE['DFXHIMDZRR'],
        self::TYPE['DFXHGMDFR'],
        self::TYPE['DFXHGMDZRR'],
        self::TYPE['FRBLXYJLXX'],
        self::TYPE['ZRRBLXYJLXX'],
        self::TYPE['FRCXXYJLXX'],
        self::TYPE['ZRRCXXYJLXX'],),
        IUserGroup::ID['SJCY'] => array(
        self::TYPE['DFXHIMDFR'],
        self::TYPE['DFXHIMDZRR'],
        self::TYPE['DFXHGMDFR'],
        self::TYPE['DFXHGMDZRR'],
        self::TYPE['FRBLXYJLXX'],
        self::TYPE['ZRRBLXYJLXX'],
        self::TYPE['FRCXXYJLXX'],
        self::TYPE['ZRRCXXYJLXX'],),
        IUserGroup::ID['SWZFW'] => array(
        self::TYPE['DFXHIMDFR'],
        self::TYPE['DFXHIMDZRR'],
        self::TYPE['DFXHGMDFR'],
        self::TYPE['DFXHGMDZRR'],
        self::TYPE['FRBLXYJLXX'],
        self::TYPE['ZRRBLXYJLXX'],
        self::TYPE['FRCXXYJLXX'],
        self::TYPE['ZRRCXXYJLXX'],),
        IUserGroup::ID['SWTZB'] => array(
            self::TYPE['XZJLXXZRR'],
            self::TYPE['XZJLXXFRHQTZZ'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
        ),
        IUserGroup::ID['SWBB'] => array(self::TYPE['SYDWFRDJXX'], self::TYPE['XZJGQTJBXXB'], self::TYPE['SYDWJBXXB'],
        self::TYPE['DFXHIMDFR'],
        self::TYPE['DFXHIMDZRR'],
        self::TYPE['DFXHGMDFR'],
        self::TYPE['DFXHGMDZRR'],
        self::TYPE['FRBLXYJLXX'],
        self::TYPE['ZRRBLXYJLXX'],
        self::TYPE['FRCXXYJLXX'],
        self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['SKJJ'] => array(
            self::TYPE['JXSZLJDW'],
            self::TYPE['XZJLXXZRR'],
            self::TYPE['XZJLXXFRHQTZZ'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
        ),
        IUserGroup::ID['SGYHJMRHJ'] => array(
            self::TYPE['XZJLXXZRR'],
            self::TYPE['XZJLXXFRHQTZZ'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],),
        IUserGroup::ID['SMZONGJ'] => array(
        self::TYPE['DFXHIMDFR'],
        self::TYPE['DFXHIMDZRR'],
        self::TYPE['DFXHGMDFR'],
        self::TYPE['DFXHGMDZRR'],
        self::TYPE['FRBLXYJLXX'],
        self::TYPE['ZRRBLXYJLXX'],
        self::TYPE['FRCXXYJLXX'],
        self::TYPE['ZRRCXXYJLXX'],),
        IUserGroup::ID['SJYTYJ'] => array(
            self::TYPE['JSZGXX'],
            self::TYPE['SJYXXS'],
            self::TYPE['JYJGXINXI'],
            self::TYPE['GRRYXXJYJ'],
            self::TYPE['JGRYXXSJYJ'],
            self::TYPE['PXSTYXHDJXX'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
        ),
        IUserGroup::ID['SGAJ'] => array(self::TYPE['YSCRJZJJJZGRDXX'], self::TYPE['JDCWFXX'], self::TYPE['JSZJBXX'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],),
        IUserGroup::ID['YBGAJ'] => array(
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],),
        IUserGroup::ID['SMZJ'] => array(
            self::TYPE['MZSHTTHMBFQYDW'],
            self::TYPE['SHZZNJXX'],
            self::TYPE['GRRYXXMZJ'],
            self::TYPE['MBFQYML'],
            self::TYPE['SHTTDJXX'],
            self::TYPE['XZJLXXZRR'],
            self::TYPE['XZJLXXFRHQTZZ'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
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
            self::TYPE['JGRYXXSSFJ'],
            self::TYPE['SFJDRXX'],
            self::TYPE['SFJDJGXX'],
            self::TYPE['LSZYXX'],
            self::TYPE['LSNDPJXX'],
            self::TYPE['LSSWSNDPJXX'],
            self::TYPE['XZJLXXZRR'],
            self::TYPE['XZJLXXFRHQTZZ'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
        ),
        IUserGroup::ID['SCZJ'] => array(self::TYPE['ZFCGDLJGXX'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['SRLZYSHBZJ'] => array(
            self::TYPE['ZYJNZSXX'],
            self::TYPE['YLBXXX'],
            self::TYPE['YZTQSBXXHMD'],
            self::TYPE['SYBXXX'],
            self::TYPE['SBQYXX'],
            self::TYPE['GZRYXX'],
            self::TYPE['YZTQNMGGZHMD'],
            self::TYPE['SBQYCBXX'],
            self::TYPE['YLAOBXXX'],
            self::TYPE['GRJCXX'],
            self::TYPE['TQNMGGZHMD'],
            self::TYPE['ZDLDBZWFXWGBXX'],
            self::TYPE['XZJLXXZRR'],
            self::TYPE['XZJLXXFRHQTZZ'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
        ),
        IUserGroup::ID['SZRZYHGHJ'] => array(
            self::TYPE['PGJGXX'],
            self::TYPE['XZJLXXZRR'],
            self::TYPE['XZJLXXFRHQTZZ'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
        ),
        IUserGroup::ID['SSTHJJ'] => array(
            self::TYPE['XZJLXXZRR'],
            self::TYPE['XZJLXXFRHQTZZ'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
        ),
        IUserGroup::ID['SZFHXXJSJ'] => array(
            self::TYPE['ZLJCQYXX'],
            self::TYPE['XZJLXXZRR'],
            self::TYPE['XZJLXXFRHQTZZ'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
        ),
        IUserGroup::ID['SJTYSJ'] => array(self::TYPE['SLYSXKZXX'], self::TYPE['GRRYXXJTJ'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['SSLJ'] => array(
            self::TYPE['SLGCZBXX'],
            self::TYPE['XZJLXXZRR'],
            self::TYPE['XZJLXXFRHQTZZ'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
        ),
        IUserGroup::ID['SNYNCJ'] => array(self::TYPE['GJJLTQYRZXX'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['SLYHZYJ'] => array(
            self::TYPE['QSLHXJJTJL'],
            self::TYPE['XZJLXXZRR'],
            self::TYPE['XZJLXXFRHQTZZ'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
        ),
        IUserGroup::ID['SQXJ'] => array(self::TYPE['QXTCHJBHJDXX'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['SSWJ'] => array(
            self::TYPE['ESCJDPGJGHZZS'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
        ),
        IUserGroup::ID['SWHGBDSHLYJ'] => array(
            self::TYPE['DYZGXX'],
            self::TYPE['YXZZDWJBGXX'],
            self::TYPE['GRRYXXGDJ'],
            self::TYPE['JGRYXXSWGXJ'],
            self::TYPE['LXSDJXX'],
            self::TYPE['GRYCJJBAXX'],
            self::TYPE['XZJLXXZRR'],
            self::TYPE['XZJLXXFRHQTZZ'],
            self::TYPE['SAJLVJQ'],
            self::TYPE['BWGXX'],
            self::TYPE['WWSDXX'],
            self::TYPE['WWSDGMXSJLSX'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
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
            self::TYPE['QSWCXXXJDWBZ'],
            self::TYPE['XZJLXXZRR'],
            self::TYPE['XZJLXXFRHQTZZ'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
        ),
        IUserGroup::ID['SSJJ'] => array(
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
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
            self::TYPE['CCJCJGXX'],
            self::TYPE['XZJLXXZRR'],
            self::TYPE['XZJLXXFRHQTZZ'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
        ),
        IUserGroup::ID['SJJHZHWSJ'] => array(
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['SZWFWHFGJJFZJ'] => array(
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['SYJGLJ'] => array(
            self::TYPE['XZJLXXZRR'],
            self::TYPE['XZJLXXFRHQTZZ'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
        ),
        IUserGroup::ID['SGZW'] => array(self::TYPE['QYRYXX'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['STJJ'] => array(
            self::TYPE['DTJXJGRXX'],
            self::TYPE['TJDCDXML'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
        ),
        IUserGroup::ID['SRFB'] => array(
            self::TYPE['XZJLXXZRR'],
            self::TYPE['XZJLXXFRHQTZZ'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
        ),
        IUserGroup::ID['SZSCQJ'] => array(
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['SJRGZJ'] => array(
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['SSHUIWJ'] => array(
            self::TYPE['QYGSZXXX'],
            self::TYPE['AJNSRXX'],
            self::TYPE['QYDSXZCFXX'],
            self::TYPE['QYSWJBDJXX'],
            self::TYPE['NSXYDJPDXX'],
            self::TYPE['QYQSGGXX'],
            self::TYPE['FZCNSRXX'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
        ),
        IUserGroup::ID['SDAJ'] => array(
            self::TYPE['DZDAGZZDWGRBZJL'],
            self::TYPE['XZJLXXZRR'],
            self::TYPE['XZJLXXFRHQTZZ'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
        ),
        IUserGroup::ID['SFZJZJ'] => array(
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['SFGJ'] => array(
            self::TYPE['SPFYSXK'],
            self::TYPE['FDCKFQYZZXX'],
            self::TYPE['JGRYXXSFGJ'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX'],
        ),
        IUserGroup::ID['YBHG'] => array(
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['TSW'] => array(self::TYPE['YXQNZYZ'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['SCL'] => array(
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['SWDX'] => array(
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['SGSL'] => array(
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['YBYBJFJ'] => array(self::TYPE['YHYJRJGCFXX'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['STXB'] => array(
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['SYZGLJ'] => array(
            self::TYPE['CKWLYQXX'],
            self::TYPE['CKWLJJLXX'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']
        ),
        IUserGroup::ID['SZGH'] => array(
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['SGXS'] => array(
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['SFPKFJ'] => array(
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['SMCH'] => array(
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
        IUserGroup::ID['SFL'] => array(
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']),
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
        IUserGroup::ID['LGJKQFZCHTZFWJ'] => array(),
        IUserGroup::ID['SXYZX'] => array(
            self::TYPE['SCJRSXYZX'],
            self::TYPE['ZDSSWFAJDSRSXYZX'],
            self::TYPE['SCSFGWXZCFJBXXSXYZX'],
            self::TYPE['YZWFCXCZYSXXDSRMDSXYZX'],
            self::TYPE['YZZLSXQYSXYZX'],
            self::TYPE['YCJYMLSXYZX'],
            self::TYPE['DFXHIMDFR'],
            self::TYPE['DFXHIMDZRR'],
            self::TYPE['DFXHGMDFR'],
            self::TYPE['DFXHGMDZRR'],
            self::TYPE['FRBLXYJLXX'],
            self::TYPE['ZRRBLXYJLXX'],
            self::TYPE['FRCXXYJLXX'],
            self::TYPE['ZRRCXXYJLXX']
        ),
        IUserGroup::ID['YBZQTRQ'] => array(
            self::TYPE['GYSYTQFYXXZRR'],
            self::TYPE['GYSYTQFYXXFR'],
            self::TYPE['GYSYJFXXZRR'],
            self::TYPE['GYSYJFXXFR'],
        ),
        IUserGroup::ID['YBHRRQ'] => array(
            self::TYPE['GYSYTQFYXXZRR'],
            self::TYPE['GYSYTQFYXXFR'],
            self::TYPE['GYSYJFXXZRR'],
            self::TYPE['GYSYJFXXFR'],
        ),
        IUserGroup::ID['YBQYSW'] => array(
            self::TYPE['GYSYTQFYXXZRR'],
            self::TYPE['GYSYTQFYXXFR'],
            self::TYPE['GYSYJFXXZRR'],
            self::TYPE['GYSYJFXXFR'],
        ),
        IUserGroup::ID['GWSCSDLYBGDJ'] => array(
            self::TYPE['GYSYTQFYXXZRR'],
            self::TYPE['GYSYTQFYXXFR'],
            self::TYPE['GYSYJFXXZRR'],
            self::TYPE['GYSYJFXXFR'],
        ),
        //@position_usergroup
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
