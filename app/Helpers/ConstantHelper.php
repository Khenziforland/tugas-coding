<?php

namespace App\Helpers;

class ConstantHelper
{
    /**
     ** Bpjs type.
     *
     * @return array
     */
    public static function bpjsType()
    {
        $result = [
            'Tidak Ada',
            'Penambah',
            'Pengurang',
        ];

        return $result;
    }

    /**
     ** Gender.
     *
     * @return array
     */
    public static function gender()
    {
        $result = [
            'Laki-laki',
            'Perempuan',
        ];

        return $result;
    }

    /**
     ** Religion.
     *
     * @return array
     */
    public static function religion()
    {
        $result = [
            'Islam',
            'Kristen',
            'Katolik',
            'Hindu',
            'Budha',
        ];

        return $result;
    }

    /**
     ** Education.
     *
     * @return array
     */
    public static function education()
    {
        $result = [
            'SD',
            'SMP',
            'SMA',
            'SMK',
            'S1',
            'S2',
            'S3',
        ];

        return $result;
    }

    /**
     ** Employee status.
     *
     * @return array
     */
    public static function employeeStatus()
    {
        $result = [
            'Pegawai Kontrak',
            'Pegawai Tetap',
            'Resign',
        ];

        return $result;
    }

    /**
     ** Recruitment status.
     *
     * @return array
     */
    public static function recruitmentStatus()
    {
        $result = [
            'Menunggu Persetujuan',
            'Disetujui',
            'Ditolak',
        ];

        return $result;
    }

    /**
     ** Absence submission category.
     *
     * @return array
     */
    public static function absenceSubmissionCategory()
    {
        $result = [
            'Izin',
            'Sakit',
        ];

        return $result;
    }

    /**
     ** Absence submission status.
     *
     * @return array
     */
    public static function absenceSubmissionStatus()
    {
        $result = [
            'Menunggu Persetujuan',
            'Disetujui',
            'Ditolak',
        ];

        return $result;
    }

    /**
     ** Overtime submission status.
     *
     * @return array
     */
    public static function overtimeSubmissionStatus()
    {
        $result = [
            'Menunggu Persetujuan',
            'Disetujui',
            'Ditolak',
        ];

        return $result;
    }

    /**
     ** Resignation submission status.
     *
     * @return array
     */
    public static function resignationSubmissionStatus()
    {
        $result = [
            'Menunggu Persetujuan',
            'Disetujui',
            'Ditolak',
        ];

        return $result;
    }

    /**
     ** Business trip submission status.
     *
     * @return array
     */
    public static function businessTripSubmissionStatus()
    {
        $result = [
            'Menunggu Persetujuan',
            'Disetujui',
            'Ditolak',
        ];

        return $result;
    }

    /**
     ** Promotion mutation submission status.
     *
     * @return array
     */
    public static function promotionMutationSubmissionStatus()
    {
        $result = [
            'Menunggu Persetujuan',
            'Disetujui',
            'Ditolak',
        ];

        return $result;
    }

    /**
     ** Holiday allowance submission status.
     *
     * @return array
     */
    public static function holidayAllowanceSubmissionStatus()
    {
        $result = [
            'Menunggu Persetujuan',
            'Disetujui',
            'Ditolak',
        ];

        return $result;
    }

    /**
     ** Schedule status.
     *
     * @return array
     */
    public static function scheduleStatus()
    {
        $result = [
            'Hadir',
            'Tidak Hadir',
        ];

        return $result;
    }

    /**
     ** Absence submission category.
     *
     * @return array
     */
    public static function scheduleAbsenceCategory()
    {
        $result = [
            'Tanpa Keterangan',
            'Izin',
            'Sakit',
        ];

        return $result;
    }
}
