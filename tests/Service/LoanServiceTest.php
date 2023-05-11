<?php

namespace App\Tests\Service;

use App\Entity\Loan;
use App\Repository\LoanRepository;
use App\Service\LoanService;
use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\DBAL\Result;
use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Framework\TestCase;

class LoanServiceTest extends TestCase
{
//    private \PHPUnit\Framework\MockObject\MockObject|EntityManagerInterface $entityManager;
//    private LoanRepository|\PHPUnit\Framework\MockObject\MockObject $loanRepository;
//    private LoanService $loanService;
//
//    protected function setUp(): void
//    {
//        $mockQueryBuilder = $this->getMockBuilder(QueryBuilder::class)
//            ->disableOriginalConstructor()
//            ->getMock();
//
//        $queryMock = $this->getMockBuilder(Result::class)
//            ->disableOriginalConstructor()
//            ->getMock();
//
//        $mockQueryBuilder
//            ->method('select')
//            ->willReturnSelf();
//
//        $mockQueryBuilder
//            ->method('select')
//            ->willReturnSelf();
//
//        $mockQueryBuilder
//            ->method('from')
//            ->willReturnSelf();
//
//        $mockQueryBuilder
//            ->method('where')
//            ->willReturnSelf();
//
//        $mockQueryBuilder
//            ->method('addOrderBy')
//            ->willReturnSelf();
//
//        $mockQueryBuilder
//            ->method('setMaxResults')
//            ->willReturnSelf();
//
//        $mockQueryBuilder
//            ->method('setParameter')
//            ->willReturnSelf();
//
//        $expectedResult = ['foo', 'bar'];
//
//        $mockQueryBuilder->method('getQuery')
//            ->willReturn($queryMock);
//
//        $mockQueryBuilder
//            ->method('getResult')
//            ->willReturn($expectedResult);
//
//        $mockEntityManager = $this->getMockBuilder(EntityManagerInterface::class)
//            ->disableOriginalConstructor()
//            ->getMock();
//
//        $mockEntityManager
//            ->method('createQueryBuilder')
//            ->willReturn($mockQueryBuilder);
//
//        $this->loanRepository = $this->createMock(LoanRepository::class);
//
//
//        $this->loanService = new LoanService($this->loanRepository, $mockEntityManager);
//    }
//
////    public function testFindById()
////    {
////        $exampleEntity = new ExampleEntity();
////        $exampleEntity->setId(1);
////
////        $this->loanRepository->expects($this->once())
////            ->method('find')
////            ->with(1)
////            ->willReturn($exampleEntity);
////
////        $result = $this->exampleService->findById(1);
////
////        $this->assertEquals($exampleEntity, $result);
////    }
//
//    public function testFindClosestMethod(): void
//    {
//        print($this->loanService->findClosest(1200));
//        $this->assertTrue(true);
//    }
}
