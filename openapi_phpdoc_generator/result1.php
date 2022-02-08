<?php

/*
    @OA\Property(type="string", property="id", example="1743948a-1bb6-4bef-a260-079eeb6b8b06"),
    @OA\Property(type="string", property="name", example="Unit ticket"),
    @OA\Property(type="string", property="reference", example="UT"),
    @OA\Property(type="string", property="description", example="Ticket for a 1-hour travel"),
    @OA\Property(type="string", property="usableFrom", example="2019-05-01T00:00:00Z"),
    @OA\Property(type="string", property="usableTo", example="2020-05-01T23:59:59Z"),
    @OA\Property(type="string", property="validityEnd", example="2019-05-12T12:00:00Z"),
    @OA\Property(type="array", @OA\Items(
        @OA\Property(type="string", property="type", example="FLAT"),
        @OA\Property(type="string", property="amount", example="90"),
        @OA\Property(type="string", property="amountIncludingTaxes", example="100"),
        @OA\Property(type="string", property="currency", example="eur"),
        @OA\Property(type="array", @OA\Items(
            @OA\Property(type="array", @OA\Items(
                @OA\Property(type="string", property="name", example="VAT"),
                @OA\Property(type="string", property="rate", example="10"),
                @OA\Property(type="string", property="amount", example="10"),
            )
        )
    )
    @OA\Property(type="array", @OA\Items(
        @OA\Property(type="string", property="0", example="AGENCY"),
        @OA\Property(type="string", property="1", example="ONBOARD"),
    )
    @OA\Property(type="string", property="renewable", example="1"),
    @OA\Property(type="array", @OA\Items(
        @OA\Property(type="array", @OA\Items(
            @OA\Property(type="array", @OA\Items(
                @OA\Property(type="array", @OA\Items(
                    @OA\Property(type="string", property="0", example="RESEAU_SCOLAIRE"),
                )
            )
            @OA\Property(type="array", @OA\Items(
                @OA\Property(type="array", @OA\Items(
                    @OA\Property(type="string", property="0", example="LA"),
                )
                @OA\Property(type="array", @OA\Items(
                    @OA\Property(type="string", property="0", example="LB"),
                )
            )
            @OA\Property(type="array", @OA\Items(
                @OA\Property(type="array", @OA\Items(
                    @OA\Property(type="string", property="0", example="2001R01-1"),
                )
            )
            @OA\Property(type="array", @OA\Items(
                @OA\Property(type="array", @OA\Items(
                     @OA\Property(type="string", property="0", example="06112"),
                )
            )
            @OA\Property(type="array", @OA\Items(
                @OA\Property(type="array", @OA\Items(
                    @OA\Property(type="string", property="0", example="05878"),
                )
            )
            @OA\Property(type="array", @OA\Items(
                @OA\Property(type="array", @OA\Items(
                    @OA\Property(type="string", property="0", example="ABCD"),
                )
            )
            @OA\Property(type="array", @OA\Items(
                @OA\Property(type="array", @OA\Items(
                    @OA\Property(type="string", property="0", example="0110101"),
                )
            )
            @OA\Property(type="array", @OA\Items(
                @OA\Property(type="array", @OA\Items(
                    @OA\Property(type="string", property="0", example="1pm"),
                )
            )
            @OA\Property(type="array", @OA\Items(
                @OA\Property(type="array", @OA\Items(
                    @OA\Property(type="string", property="0", example="CAL_SOLAIRE"),
                )
            )
        )
    )
    @OA\Property(type="array", @OA\Items(
        @OA\Property(type="string", property="0", example="string"),
    )
    @OA\Property(type="array", @OA\Items(
        @OA\Property(type="array", @OA\Items(
            @OA\Property(type="array", @OA\Items(
                @OA\Property(type="string", property="id", example="1743948a-1bb6-4bef-a260-079eeb6b8b06"),
                @OA\Property(type="string", property="reference", example="CHILD_PROFILE"),
                @OA\Property(type="string", property="name", example="Child"),
                @OA\Property(type="string", property="type", example="IMPLICIT"),
                @OA\Property(type="string", property="startAge", example=""),
                @OA\Property(type="string", property="endAge", example="18"),
            )
            @OA\Property(type="array", @OA\Items(
                @OA\Property(type="string", property="id", example="1743948a-1bb6-4bef-a260-079eeb6b8b06"),
                @OA\Property(type="string", property="reference", example="STUDENT_PROFILE"),
                @OA\Property(type="string", property="name", example="Student"),
                @OA\Property(type="string", property="type", example="EXPLICIT"),
                @OA\Property(type="string", property="endDate", example="2021-09-01"),
                @OA\Property(type="string", property="endAge", example="2022-07-31"),
            )
        )
    )
    @OA\Property(type="array", @OA\Items(
        @OA\Property(type="array", @OA\Items(
            @OA\Property(type="array", @OA\Items(
                @OA\Property(type="string", property="id", example="1743948a-1bb6-4bef-a260-079eeb6b8b06"),
                @OA\Property(type="string", property="reference", example="CHILD_PROFILE"),
                @OA\Property(type="string", property="name", example="Child"),
                @OA\Property(type="string", property="type", example="IMPLICIT"),
                @OA\Property(type="string", property="startAge", example=""),
                @OA\Property(type="string", property="endAge", example="18"),
            )
            @OA\Property(type="array", @OA\Items(
                @OA\Property(type="string", property="id", example="1743948a-1bb6-4bef-a260-079eeb6b8b06"),
                @OA\Property(type="string", property="reference", example="STUDENT_PROFILE"),
                @OA\Property(type="string", property="name", example="Student"),
                @OA\Property(type="string", property="type", example="EXPLICIT"),
                @OA\Property(type="string", property="endDate", example="2021-09-01"),
                @OA\Property(type="string", property="endAge", example="2022-07-31"),
            )
        )
    )
    @OA\Property(type="string", property="saleableFrom", example="2019-05-01T00:00:00Z"),
    @OA\Property(type="string", property="saleableUntil", example="2019-05-01T00:00:00Z"),
    @OA\Property(type="string", property="supportType", example="PASSENGER_TAG"),
    @OA\Property(type="string", property="usageType", example="SINGLE"),
*/