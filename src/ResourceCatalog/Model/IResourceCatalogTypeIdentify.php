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
        IResourceCatalog::TYPE['JGJCDXZJL'] => 'JGJCDXZJL',
        IResourceCatalog::TYPE['YXQNZYZ'] => 'YXQNZYZ',
        IResourceCatalog::TYPE['HRBXX'] => 'HRBXX',
        IResourceCatalog::TYPE['JKQYPJAJYSMD'] => 'JKQYPJAJYSMD',
        IResourceCatalog::TYPE['QXTCHJBHJDXX'] => 'QXTCHJBHJDXX',
        IResourceCatalog::TYPE['XSPJXX'] => 'XSPJXX',
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => 'YSCRJZJJJZGRDXX',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => 'ZFCGDLJGXX',
        IResourceCatalog::TYPE['QYRYXX'] => 'QYRYXX',
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => 'SFJDJGCYRYZGXX',
        IResourceCatalog::TYPE['ZYJNZSXX'] => 'ZYJNZSXX',
        IResourceCatalog::TYPE['ZLJCQYXX'] => 'ZLJCQYXX',
        IResourceCatalog::TYPE['PGJGXX'] => 'PGJGXX',
        IResourceCatalog::TYPE['QSLHXJJTJL'] => 'QSLHXJJTJL',
        IResourceCatalog::TYPE['SLYSXKZXX'] => 'SLYSXKZXX',
        IResourceCatalog::TYPE['SPFYSXK'] => 'SPFYSXK',
        IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => 'ESCJDPGJGHZZS',
        IResourceCatalog::TYPE['SLGCZBXX'] => 'SLGCZBXX',
        IResourceCatalog::TYPE['SHZZNJXX'] => 'SHZZNJXX',
        IResourceCatalog::TYPE['GJJLTQYRZXX'] => 'GJJLTQYRZXX',
        IResourceCatalog::TYPE['YXZZDWJBGXX'] => 'YXZZDWJBGXX',
        IResourceCatalog::TYPE['HSZYZGZXX'] => 'HSZYZGZXX',
        IResourceCatalog::TYPE['QYGSZXXX'] => 'QYGSZXXX',
        IResourceCatalog::TYPE['QYDSXZCFXX'] => 'QYDSXZCFXX',
        IResourceCatalog::TYPE['AJNSRXX'] => 'AJNSRXX',
        IResourceCatalog::TYPE['YHYJRJGCFXX'] => 'YHYJRJGCFXX',
        IResourceCatalog::TYPE['SYDWFRDJXX'] => 'SYDWFRDJXX',
        IResourceCatalog::TYPE['PXSTYXHDJXX'] => 'PXSTYXHDJXX',
        IResourceCatalog::TYPE['DZDAGZZDWGRBZJL'] => 'DZDAGZZDWGRBZJL',
        IResourceCatalog::TYPE['JXSZLJDW'] => 'JXSZLJDW',
        IResourceCatalog::TYPE['DTJXJGRXX'] => 'DTJXJGRXX',
        IResourceCatalog::TYPE['SXBZXJGXX'] => 'SXBZXJGXX',
        IResourceCatalog::TYPE['SXBZXRMD'] => 'SXBZXRMD',
        IResourceCatalog::TYPE['YLBXXX'] => 'YLBXXX',
        IResourceCatalog::TYPE['TJDCDXML'] => 'TJDCDXML',
        IResourceCatalog::TYPE['JDCWFXX'] => 'JDCWFXX',
        IResourceCatalog::TYPE['GTGSHXX'] => 'GTGSHXX',
        IResourceCatalog::TYPE['CMQYSBXX'] => 'CMQYSBXX',
        IResourceCatalog::TYPE['YPLSQYXX'] => 'YPLSQYXX',
        IResourceCatalog::TYPE['ZYZXX'] => 'ZYZXX',
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => 'YZTQSBXXHMD',
        IResourceCatalog::TYPE['JGRYXX'] => 'JGRYXX',
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => 'SPYPTSJBJLGR',
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => 'SPYPTSJBJLDW',
        IResourceCatalog::TYPE['JXMPCPXX'] => 'JXMPCPXX',
        IResourceCatalog::TYPE['JSZGXX'] => 'JSZGXX',
        IResourceCatalog::TYPE['SJYXXS'] => 'SJYXXS',
        IResourceCatalog::TYPE['SYBXXX'] => 'SYBXXX',
        IResourceCatalog::TYPE['SJJXMXX'] => 'SJJXMXX',
        IResourceCatalog::TYPE['JYJGXINXI'] => 'JYJGXINXI',
        IResourceCatalog::TYPE['GRRYXXJYJ'] => 'GRRYXXJYJ',
        IResourceCatalog::TYPE['GRRYXXJTJ'] => 'GRRYXXJTJ',
        IResourceCatalog::TYPE['GRRYXXGDJ'] => 'GRRYXXGDJ',
        IResourceCatalog::TYPE['GRRYXXMZJ'] => 'GRRYXXMZJ',
        IResourceCatalog::TYPE['SBQYXX'] => 'SBQYXX',
        IResourceCatalog::TYPE['SFJDJGDJXX'] => 'SFJDJGDJXX',
        IResourceCatalog::TYPE['GZJGJBXX'] => 'GZJGJBXX',
        IResourceCatalog::TYPE['GZYXX'] => 'GZYXX',
        IResourceCatalog::TYPE['JCFLFWSXX'] => 'JCFLFWSXX',
        IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => 'JCFLFWGZZJBXX',
        IResourceCatalog::TYPE['LSSWSXX'] => 'LSSWSXX',
        IResourceCatalog::TYPE['LSZYZGZXX'] => 'LSZYZGZXX',
        IResourceCatalog::TYPE['FDCKFQYZZXX'] => 'FDCKFQYZZXX',
        IResourceCatalog::TYPE['GZRYXX'] => 'GZRYXX',
        IResourceCatalog::TYPE['YSZYZCHBGZC'] => 'YSZYZCHBGZC',
        IResourceCatalog::TYPE['YSZYZGZXX'] => 'YSZYZGZXX',
        IResourceCatalog::TYPE['WSHJHSYWYHJCXX'] => 'WSHJHSYWYHJCXX',
        IResourceCatalog::TYPE['YLHJSFWJGXX'] => 'YLHJSFWJGXX',
        IResourceCatalog::TYPE['JBYFKZJGXX'] => 'JBYFKZJGXX',
        IResourceCatalog::TYPE['FYCRYJLXX'] => 'FYCRYJLXX',
        IResourceCatalog::TYPE['WSZYJSZGKSWJXX'] => 'WSZYJSZGKSWJXX',
        IResourceCatalog::TYPE['QSWCXXXJDWBZ'] => 'QSWCXXXJDWBZ',
        IResourceCatalog::TYPE['YZTQNMGGZHMD'] => 'YZTQNMGGZHMD',
        IResourceCatalog::TYPE['JGRYXXSWGXJ'] => 'JGRYXXSWGXJ',
        IResourceCatalog::TYPE['JGRYXXSJYJ'] => 'JGRYXXSJYJ',
        IResourceCatalog::TYPE['JGRYXXSFGJ'] => 'JGRYXXSFGJ',
        IResourceCatalog::TYPE['JGRYXXSSFJ'] => 'JGRYXXSSFJ',
        IResourceCatalog::TYPE['MBFQYML'] => 'MBFQYML',
        IResourceCatalog::TYPE['SHTTDJXX'] => 'SHTTDJXX',
        IResourceCatalog::TYPE['QYZXXX'] => 'QYZXXX',
        IResourceCatalog::TYPE['QYDXXX'] => 'QYDXXX',
        IResourceCatalog::TYPE['CCJCJGXX'] => 'CCJCJGXX',

        IResourceCatalog::TYPE['TZXMBLJGGSXX'] => 'TZXMBLJGGSXX',
        IResourceCatalog::TYPE['TZXMMCDMPPXX'] => 'TZXMMCDMPPXX',
        IResourceCatalog::TYPE['SFJDRXX'] => 'SFJDRXX',
        IResourceCatalog::TYPE['SFJDJGXX'] => 'SFJDJGXX',
        IResourceCatalog::TYPE['LSZYXX'] => 'LSZYXX',
        IResourceCatalog::TYPE['LSNDPJXX'] => 'LSNDPJXX',
        IResourceCatalog::TYPE['LSSWSNDPJXX'] => 'LSSWSNDPJXX',
        IResourceCatalog::TYPE['SAJLVJQ'] => 'SAJLVJQ',
        IResourceCatalog::TYPE['BWGXX'] => 'BWGXX',
        IResourceCatalog::TYPE['WWSDXX'] => 'WWSDXX',
        IResourceCatalog::TYPE['WWSDGMXSJLSX'] => 'WWSDGMXSJLSX',
        IResourceCatalog::TYPE['QYSWJBDJXX'] => 'QYSWJBDJXX',
        IResourceCatalog::TYPE['NSXYDJPDXX'] => 'NSXYDJPDXX',
        IResourceCatalog::TYPE['QYQSGGXX'] => 'QYQSGGXX',
        IResourceCatalog::TYPE['FZCNSRXX'] => 'FZCNSRXX',
        IResourceCatalog::TYPE['LXSDJXX'] => 'LXSDJXX',
        IResourceCatalog::TYPE['GRYCJJBAXX'] => 'GRYCJJBAXX',
        IResourceCatalog::TYPE['XZJLXXZRR'] => 'XZJLXXZRR',
        IResourceCatalog::TYPE['XZJLXXFRHQTZZ'] => 'XZJLXXFRHQTZZ',
        IResourceCatalog::TYPE['QYGDZCTZXMHZHBA'] => 'QYGDZCTZXMHZHBA',
        IResourceCatalog::TYPE['SBQYCBXX'] => 'SBQYCBXX',
        IResourceCatalog::TYPE['YLAOBXXX'] => 'YLAOBXXX',
        IResourceCatalog::TYPE['GRJCXX'] => 'GRJCXX',
        IResourceCatalog::TYPE['QYFRGGXYZHPJJG'] => 'QYFRGGXYZHPJJG',
        IResourceCatalog::TYPE['TEST'] => 'TEST'
    );
}
