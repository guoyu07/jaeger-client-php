<?php
namespace Jaeger\Thrift;

/**
 * Autogenerated by Thrift Compiler (0.10.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class PerOperationSamplingStrategies
{
    static $_TSPEC;

  /**
   * @var double
   */
    public $defaultSamplingProbability = null;
  /**
   * @var double
   */
    public $defaultLowerBoundTracesPerSecond = null;
  /**
   * @var \Jaeger\Thrift\OperationSamplingStrategy[]
   */
    public $perOperationStrategies = null;
  /**
   * @var double
   */
    public $defaultUpperBoundTracesPerSecond = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
            1 => array(
            'var' => 'defaultSamplingProbability',
            'type' => TType::DOUBLE,
            ),
            2 => array(
            'var' => 'defaultLowerBoundTracesPerSecond',
            'type' => TType::DOUBLE,
            ),
            3 => array(
            'var' => 'perOperationStrategies',
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\Jaeger\Thrift\OperationSamplingStrategy',
            ),
            ),
            4 => array(
            'var' => 'defaultUpperBoundTracesPerSecond',
            'type' => TType::DOUBLE,
            ),
            );
        }
        if (is_array($vals)) {
            if (isset($vals['defaultSamplingProbability'])) {
                $this->defaultSamplingProbability = $vals['defaultSamplingProbability'];
            }
            if (isset($vals['defaultLowerBoundTracesPerSecond'])) {
                $this->defaultLowerBoundTracesPerSecond = $vals['defaultLowerBoundTracesPerSecond'];
            }
            if (isset($vals['perOperationStrategies'])) {
                $this->perOperationStrategies = $vals['perOperationStrategies'];
            }
            if (isset($vals['defaultUpperBoundTracesPerSecond'])) {
                $this->defaultUpperBoundTracesPerSecond = $vals['defaultUpperBoundTracesPerSecond'];
            }
        }
    }

    public function getName()
    {
        return 'PerOperationSamplingStrategies';
    }

    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::DOUBLE) {
                        $xfer += $input->readDouble($this->defaultSamplingProbability);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::DOUBLE) {
                        $xfer += $input->readDouble($this->defaultLowerBoundTracesPerSecond);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::LST) {
                        $this->perOperationStrategies = array();
                        $_size0 = 0;
                        $_etype3 = 0;
                        $xfer += $input->readListBegin($_etype3, $_size0);
                        for ($_i4 = 0; $_i4 < $_size0; ++$_i4) {
                            $elem5 = null;
                            $elem5 = new \Jaeger\Thrift\OperationSamplingStrategy();
                            $xfer += $elem5->read($input);
                            $this->perOperationStrategies []= $elem5;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::DOUBLE) {
                        $xfer += $input->readDouble($this->defaultUpperBoundTracesPerSecond);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('PerOperationSamplingStrategies');
        if ($this->defaultSamplingProbability !== null) {
            $xfer += $output->writeFieldBegin('defaultSamplingProbability', TType::DOUBLE, 1);
            $xfer += $output->writeDouble($this->defaultSamplingProbability);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->defaultLowerBoundTracesPerSecond !== null) {
            $xfer += $output->writeFieldBegin('defaultLowerBoundTracesPerSecond', TType::DOUBLE, 2);
            $xfer += $output->writeDouble($this->defaultLowerBoundTracesPerSecond);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->perOperationStrategies !== null) {
            if (!is_array($this->perOperationStrategies)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('perOperationStrategies', TType::LST, 3);
            {
            $output->writeListBegin(TType::STRUCT, count($this->perOperationStrategies));
            {
            foreach ($this->perOperationStrategies as $iter6) {
                $xfer += $iter6->write($output);
            }
            }
            $output->writeListEnd();
            }
            $xfer += $output->writeFieldEnd();
        }
        if ($this->defaultUpperBoundTracesPerSecond !== null) {
            $xfer += $output->writeFieldBegin('defaultUpperBoundTracesPerSecond', TType::DOUBLE, 4);
            $xfer += $output->writeDouble($this->defaultUpperBoundTracesPerSecond);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
